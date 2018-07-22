<?php
/**
 * Created by PhpStorm.
 * User: tonpeyre
 * Date: 22/07/2018
 * Time: 16:41
 */

if (isset($_SESSION["user"]))
{
    unset($_SESSION["user"]);
    $_SESSION["user"] = NULL;
    $set = array("value" => 1);
    $smarty->assign("is_in_game", false);

}