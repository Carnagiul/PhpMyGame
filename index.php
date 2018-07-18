<?php

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

$tpl = 'default';

$smarty = new Smarty();

$page = "home";

if (isset($_GET["p"]))
	if (file_exists("Page/" . $_GET["p"] . ".Page.php"))
		$page = $_GET["p"];

include ("Page/" . $page . ".Page.php");

$smarty->assign('tpl', $tpl);
$smarty->display('' . $tpl . '/' . $page . '.tpl');

