<?php
/**
 * Created by PhpStorm.
 * User: tonpeyre
 * Date: 26/07/2018
 * Time: 13:28
 */

if (isset($_SESSION["user"]) && isset($user) && isset($node))
{
    if (isset($_GET["ajax"]) && $_GET["ajax"] == "on") {
        if (isset($_GET["id"])) {
            $b = NULL;
            foreach ($node->getBuildings() as $building) {
                if ($building instanceof Building)
                    if ($building->getId() == intval($_GET["id"]))
                        $b = $building;
            }
            if ($b != NULL)
            {
                if ($b->getActualLevel() >= 1)
                    $b->setActualLevel($b->getActualLevel() - 1);
            }
        }
    }
}
$page = ucfirst(strtolower("Buildings"));
include ("Buildings.Page.php");