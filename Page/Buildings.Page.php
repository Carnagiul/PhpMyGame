<?php

$node = new Node();
$node->setNodeRessStorageArray(array(1500,1500,1500));
$node->setNodeRessAmountArray(array(200,300,180));
$node->setNodeRessProductionArray(array(11,18,8));
$node->setNodeBuildingArray(array(1,2,3,4,5,6,7,8,9));

if (isset($_GET["ajax"]) && $_GET["ajax"] == "on" && isset($_SESSION["user"]))
{
	if (isset($_GET["id"]))
	{
		$b = NULL;
		foreach ($node->getBuildings() as $building)
		{
			if ($building instanceof Building)
				if ($building->getId() == intval($_GET["id"]))
					$b = $building;
		}
		if ($b != NULL)
		{
			$error = false;
			foreach ($node->getRess() as $ress)
			{
				if ($ress instanceof Ressource && $error == false)
				{
					foreach ($b->getCalcRess() as $ress2)
					{
						if ($ress2 instanceof Ressource && $error == false)
						{
							if ($ress->getId() == $ress2->getId() && $error == false)
							{
								if ($ress2->getRessAmount() > $ress->getRessAmount() && $error == false)
									$error = true;
							}
						}
					}
				}
			}
			if ($error == false)
			{
				if ($b->isInfiniteBuilding() || $b->getActualLevel() < $b->getMaxLevel())
				{
                    foreach ($node->getRess() as $ress)
                    {
                        if ($ress instanceof Ressource)
                        {
                            foreach ($b->getCalcRess() as $ress2)
                            {
                                if ($ress2 instanceof Ressource)
                                    if ($ress->getId() == $ress2->getId())
                                        $ress->removeRessAmount($ress2->getRessAmount());
                            }
                        }
                    }
					if ($b->isInstantBuild())
					{
						$b->setActualLevel($b->getActualLevel() + 1);
					}
					else
					{
                        $b->setActualLevel($b->getActualLevel() + 1);
                    }
                }
			}
		}
	}

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

?>
