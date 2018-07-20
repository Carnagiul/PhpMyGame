<?php

$node = new Node();
$node->setNodeRessStorageArray(array(1500,1500,1500));
$node->setNodeRessAmountArray(array(200,300,180));
$node->setNodeRessProductionArray(array(11,18,8));
$node->setNodeBuildingArray(array(1,2,3,4,5,6,7,8,9));
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

?>
