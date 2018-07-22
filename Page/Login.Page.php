<?php
/**
 * Created by PhpStorm.
 * User: tonpeyre
 * Date: 22/07/2018
 * Time: 16:43
 */

if (!(isset($_SESSION["user"])))
{
    if (isset($_POST["name"]))
    {
        if (isset($_POST["password"]))
        {
            $set = $user->CredentialLoginMixed("Canargiul", "kzg3pom2dat");
            if ($set["value"] == 0)
            {
                $user->LoadPlayerByName($_SESSION["user"]["name"]);
                $smarty->assign("user", $user);
            }
            $smarty->assign("is_in_game", ($set["value"] == 0) ? true : false);
        }
    }
}
