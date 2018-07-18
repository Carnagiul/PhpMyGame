<?php

require_once ("smarty/libs/Smarty.class.php");

require_once ("Classes/Points.trait.php");
require_once ("Classes/Entity.trait.php");
require_once ("Classes/Building.class.php");

require_once ("Classes/Credential.trait.php");
require_once ("Classes/Register.trait.php");
require_once ("Classes/User.class.php");

$tpl = 'default';

$smarty = new Smarty();
$smarty->assign('tpl', $tpl);
$smarty->display('' . $tpl . '/index.tpl');
?>
