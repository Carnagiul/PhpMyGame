<?php

$smarty->assign("is_logged", false);
if (isset($_SESSION["user"]))
	$smarty->assign("is_logged", true);

?>
