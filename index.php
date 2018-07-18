<?php

require_once ("smarty/libs/Smarty.class.php");

$tpl = 'default';

$smarty = new Smarty();
$smarty->assign('tpl', $tpl);
$smarty->display('' . $tpl . '/index.tpl');
?>
