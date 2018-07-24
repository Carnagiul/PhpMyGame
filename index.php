<?php

session_start();

error_reporting(E_ALL);

require_once ("smarty/libs/Smarty.class.php");
require_once ("Classes/NotificationInspina.Class.php");
require_once ("Classes/Sql.class.php");
require_once ("Classes/Entity.trait.php");
require_once ("Classes/Ressource.class.php");
require_once ("Classes/Points.trait.php");
require_once ("Classes/Building.class.php");
require_once ("Classes/Credential.trait.php");
require_once ("Classes/Register.trait.php");
require_once ("Classes/User.class.php");
require_once ("Classes/Server.class.php");
require_once ("Classes/Node.Class.php");

include ("Lang/index.php");

$sql = new Sql();
$sql->connect();
$smarty = new Smarty();
$server = new Server();
$user = new User();
$set = array("value" => 1);

$smarty->assign("lang", $lang["fr"]);

if (isset($_SESSION["user"]))
{
    $set = $user->CredentialLoginMixed($_SESSION["user"]["name"], $_SESSION["user"]["pass"]);
    if ($set["value"] == 0)
    {
        $user->LoadPlayerByName($_SESSION["user"]["name"]);
        $smarty->assign("user", $user);
    }
}

$smarty->assign("is_in_game", ($set["value"] == 0) ? true : false);

$server->setRess();
$server->setBuildings();

$tpl = 'default';
$page = "home";

if (isset($_GET["p"]))
	if (file_exists("Page/" . $_GET["p"] . ".Page.php"))
		$page = $_GET["p"];

include ("Page/" . $page . ".Page.php");

$smarty->assign('base_dir', 'templates/' . $tpl . '/');


$smarty->assign('tpl', $tpl);
$smarty->display('' . $tpl . '/' . $page . '.tpl');

