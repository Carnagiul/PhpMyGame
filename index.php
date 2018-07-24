<?php

$debug = true;

function deb(string $str)
{
	print ("Load line " . $str . " <br />");
}

session_start();

error_reporting(E_ALL);

require_once ("smarty/libs/Smarty.class.php");
if ($debug)
	deb("Require_once Smarty...");
require_once ("Classes/NotificationInspina.Class.php");
if ($debug)
	deb("Require_once NotificationInspina...");
require_once ("Classes/Sql.class.php");
if ($debug)
	deb("Require_once Sql...");
require_once ("Classes/Entity.trait.php");
if ($debug)
	deb("Require_once Entity...");
require_once ("Classes/Ressource.class.php");
if ($debug)
	deb("Require_once Ressource...");
require_once ("Classes/Points.trait.php");
if ($debug)
	deb("Require_once Point...");
require_once ("Classes/Building.class.php");
if ($debug)
	deb("Require_once Building...");
require_once ("Classes/Credential.trait.php");
if ($debug)
	deb("Require_once Credential...");
require_once ("Classes/Register.trait.php");
if ($debug)
	deb("Require_once Register...");
require_once ("Classes/User.class.php");
if ($debug)
	deb("Require_once User...");
require_once ("Classes/Server.class.php");
if ($debug)
	deb("Require_once Server...");
require_once ("Classes/Node.Class.php");
if ($debug)
	deb("Require_once Node...");

include ("Lang/index.php");
if ($debug)
	deb("Require_once Lang...");

$sql = new Sql();
if ($debug)
	deb("Create SQL object...");

$sql->connect();
if ($debug)
	deb("Connect to SQL...");
$smarty = new Smarty();
if ($debug)
	deb("Create Object Smarty...");
$server = new Server();
if ($debug)
	deb("Create Object Server...");
$user = new User();
if ($debug)
	deb("Create Object User...");
$set = array("value" => 1);
if ($debug)
    deb("Set value \$set with array Value => 1...");

$smarty->assign("lang", $lang["fr"]);

if ($debug)
    deb("Set smarty with value Lang and value \$lang FR...");
if (isset($_SESSION["user"]))
{
    $set = $user->CredentialLoginMixed($_SESSION["user"]["name"], $_SESSION["user"]["pass"]);
    if ($set["value"] == 0)
    {
        $user->LoadPlayerByName($_SESSION["user"]["name"]);
        $smarty->assign("user", $user);
    }
}

if ($debug)
    deb("Connexion on website...");

$smarty->assign("is_in_game", ($set["value"] == 0) ? true : false);

if ($debug)
    deb("Define on smarty if user is connect...");
$server->setRess();

if ($debug)
    deb("Set server ress...");
$server->setBuildings();
if ($debug)
    deb("Set Server buildings ...");

$tpl = 'default';
$page = "home";

if (isset($_GET["p"]))
	if (file_exists("Page/" . $_GET["p"] . ".Page.php"))
		$page = $_GET["p"];

include ("Page/" . $page . ".Page.php");

if ($debug)
    deb("Include Page...");
$smarty->assign('base_dir', 'templates/' . $tpl . '/');


$smarty->assign('tpl', $tpl);
$smarty->display('' . $tpl . '/' . $page . '.tpl');


if ($debug)
    deb("Display Page...");