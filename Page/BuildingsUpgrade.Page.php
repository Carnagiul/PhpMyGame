<?php
/**
 * Created by PhpStorm.
 * User: tonpeyre
 * Date: 26/07/2018
 * Time: 13:27
 */

if (isset($_SESSION["user"]) && isset($user) && isset($node)) {

    if (isset($_GET["ajax"]) && $_GET["ajax"] == "on") {
        if (isset($_GET["id"])) {
            $b = NULL;
            foreach ($node->getBuildings() as $building) {
                if ($building instanceof Building)
                    if ($building->getId() == intval($_GET["id"]))
                        $b = $building;
            }
            if ($b != NULL) {
                $error = false;
                foreach ($node->getRess() as $ressNode)
                {
                    if ($ressNode instanceof Ressource && $error == false)
                    {
                        foreach ($b->getCalcRess() as $ressBuilding)
                        {
                            if ($ressBuilding instanceof Ressource && $error == false)
                            {
                                if ($ressNode->getId() == $ressBuilding->getId() && $error == false)
                                {
                                    if ($ressNode->getRessAmount() < $ressBuilding->getRessAmount() && $error == false)
                                        $error = true;
                                }
                            }
                        }
                    }
                }
                if ($error == false) {
                    if ($b->isInfiniteBuilding() || $b->getActualLevel() < $b->getMaxLevel()) {
                        foreach ($node->getRess() as $ressNode) {
                            if ($ressNode instanceof Ressource) {
                                foreach ($b->getCalcRess() as $ressBuilding) {
                                    if ($ressBuilding instanceof Ressource)
                                        if ($ressNode->getId() == $ressBuilding->getId())
                                            $ressNode->removeRessAmount($ressBuilding->getRessAmount());
                                }
                            }
                        }
                        if ($b->isInstantBuild()) {
                            $b->setActualLevel($b->getActualLevel() + 1);
                        } else {
                            $b->setActualLevel($b->getActualLevel() + 1);
                        }
                    }
                }
            }
        }
    }
}
$page = ucfirst(strtolower("Buildings"));
include ("Buildings.Page.php");