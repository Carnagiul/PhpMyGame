<?php

define ("_DEBUG_", false);
define ("_DEBUG_INCLUDE_", false);
define ("_DEBUG_SQL_", false);
define ("_DEBUG_SMARTY_", false);
define ("_DEBUG_SERVER_", false);
define ("_DEBUG_RESS_", false);
define ("_DEBUG_USER_", false);
define ("_DEBUG_NODE_", false);
$debug_datas = NULL;
function deb(string $str, string $file = "index.php", int $line = 0, int $gravity = 0)
{
    global $debug_datas;

    $debug = array ("gravity" => $gravity, "file" => $file, "line" => $line);
    if ($gravity == 0)
        $debug["msg"] = "Load line " . $str . " success<br />";
    $debug_datas[] = $debug;
}

session_start();

error_reporting(E_ALL);

require_once ("smarty/libs/Smarty.class.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Smarty...", "index.php", 19,0);

require_once ("Classes/NotificationInspina.Class.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once NotificationInspina...", "index.php", 22,0);
require_once ("Classes/Sql.class.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Sql...", "index.php", 24,0);
require_once ("Classes/Entity.trait.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Entity...", "index.php", 26,0);
require_once ("Classes/Ressource.class.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Ressource...", "index.php", 28,0);
require_once ("Classes/Points.trait.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Point...", "index.php", 30,0);
require_once ("Classes/Building.class.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Building...", "index.php", 32,0);
require_once ("Classes/Credential.trait.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Credential...", "index.php", 34,0);
require_once ("Classes/Register.trait.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Register...", "index.php", 36,0);
require_once ("Classes/User.class.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once User...", "index.php", 38,0);
require_once ("Classes/Server.class.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Server...", "index.php", 40,0);
require_once ("Classes/Node.Class.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Node...", "index.php", 42,0);

include ("Lang/index.php");
if (_DEBUG_INCLUDE_ || _DEBUG_) deb("Require_once Lang...", "index.php", 45,0);
$sql = new Sql();
if (_DEBUG_ || _DEBUG_SQL_) deb("Create SQL object...", "index.php", 47,0);

$sql->connect();
if (_DEBUG_ || _DEBUG_SQL_) deb("Connect to SQL...", "index.php", 50,0);
$smarty = new Smarty();
if (_DEBUG_ || _DEBUG_SMARTY_) deb("Create Object Smarty...", "index.php", 52,0);
$server = new Server();
if (_DEBUG_ || _DEBUG_SERVER_) deb("Create Object Server...", "index.php", 54,0);
$user = new User();
if (_DEBUG_ || _DEBUG_USER_) deb("Create Object User...", "index.php", 56,0);
$set = array("value" => 1);

$smarty->assign("lang", $lang["fr"]);

if (_DEBUG_) deb("Set smarty with value Lang and value \$lang FR...", "index.php", 60,0);
if (isset($_SESSION["user"]))
{
    $set = $user->CredentialLoginMixed($_SESSION["user"]["name"], $_SESSION["user"]["pass"]);
    if ($set["value"] == 0)
    {
        $user->LoadPlayerByName($_SESSION["user"]["name"]);
        $smarty->assign("user", $user);
    }
}

if (_DEBUG_) deb("Connexion on website...", "index.php", 73,0);

$smarty->assign("is_in_game", ($set["value"] == 0) ? true : false);

if (_DEBUG_) deb("Define on smarty if user is connect...", "index.php", 75,0);
$server->setRess();

if (_DEBUG_ || _DEBUG_SERVER_) deb("Set server ress...", "index.php", 78,0);
$server->setBuildings();
if (_DEBUG_ || _DEBUG_SERVER_) deb("Set Server buildings ...", "index.php", 81,0);

$tpl = 'default';
$page = "Home";
$node = NULL;

if (isset($_GET["p"]))
	if (file_exists("Page/" . ucfirst(strtolower($_GET["p"])) . ".Page.php"))
		$page = ucfirst(strtolower($_GET["p"]));

include ("Page/" . $page . ".Page.php");

if (_DEBUG_ || _DEBUG_INCLUDE_) deb("Include Page...", "index.php", 92,0);
$smarty->assign('base_dir', 'templates/' . $tpl . '/');


$smarty->assign('tpl', $tpl);


if (isset($node) && $node instanceof Node)
{
    $node->updateNodeData();
    if (_DEBUG_ || _DEBUG_NODE_) deb("Update Node Data....", "index.php", 105,0);
    $smarty->assign("NodeRess", $node->getRess());
}


if (_DEBUG_ || _DEBUG_SMARTY_) deb("Display Page...", "index.php", 111,0);
$smarty->assign("debug_datas", $debug_datas);

$smarty->display('' . $tpl . '/' . $page . '.tpl');

