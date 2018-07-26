<?php

if (isset($_SESSION["user"]))
{
    if (!(isset($node)))
    {
        $node = new Node();
        $node->setNodeDataWithId(1);
    }

    foreach ($node->getBuildings() as $building)
    {
        if ($building instanceof Building)
            $building->calcRessPerLevel($building->getActualLevel() + 1);
    }

    if (isset($_GET["id"]) && isset($_GET["lvl"]))
    {
        $building = $node->getBuildingById(intval($_GET["id"]));
        if ($building instanceof Building && intval($_GET["level"]) >= 0)
            $building->calcRessPerLevel(intval($_GET["level"]));
    }

    $smarty->assign('buildings', $node->getBuildings());
}
else
	include ("Home.Page.php");


?>
