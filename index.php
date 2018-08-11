<?php

session_start();

error_reporting(E_ALL);

require_once ("smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$tpl = 'default';
$page = "Home";
if (isset($_GET["p"]))
	if (file_exists("Page/" . ucfirst(strtolower($_GET["p"])) . ".Page.php"))
		$page = ucfirst(strtolower($_GET["p"]));

include ("Page/" . $page . ".Page.php");

$smarty->assign('tpl', $tpl);
$base_dir = 'templates/' . $tpl . '/';
$smarty->assign("base_dir", $base_dir);
$smarty->display($base_dir . $page . '.tpl');

