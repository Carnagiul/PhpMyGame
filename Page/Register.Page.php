<?php

if (!(isset($_SESSION["user"])))
{
    if (isset($_POST["username"]))
    {
        if (isset($_POST["password"]))
        {
            if (isset($_POST["email"]))
            {
                $set = $user->RegisterNewUser($_POST["username"], $_POST["password"], $_POST["email"]);
                if ($set == 0)
                    header('Location: index.php?p=Login');
                $smarty->assign("is_in_game", false);

            }
        }
    }
}
?>
