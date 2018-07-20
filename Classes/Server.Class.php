<?php
/**
 * Created by PhpStorm.
 * User: Schtroumpfette
 * Date: 05/07/2018
 * Time: 22:30
 */

class Server
{
	private $_ress;
	private $_ressCount;
	private $_buildings;
	private $_buildingsCount;
	/**
	 *
	 */
	public function setRess(): void
	{
		global $sql;

		if ($sql instanceof Sql)
		{
			$result = $sql->select(Sql::$table_ressources, NULL);
			$this->_ressCount = $result["count"];
			if ($result["count"] > 0)
			{
				if ($result["count"] > 1)
				{
					$i = 0;
					foreach ($result["datas"] as $row) {
						$this->_ress[$i] = new Ressource();
						if ($this->_ress[$i] instanceof Ressource)
							$this->_ress[$i]->loadFromDbById(Sql::$table_ressources, $row['id']);
						$i++;
					}
				}
				else
				{
					$this->_ress = new Ressource();
					$this->_ress->loadFromDbById(Sql::$table_ressources, $result["datas"]['id']);
				}
			}
		}
	}

	public function addRess(Ressource $new): void
	{
		$this->_ress[] = $new;
	}

	public function removeRess(Ressource $old): void
	{
		$i = 0;
		foreach ($this->_ress as $ress) {
			if ($ress == $old)
				unset($this->_ress[$i]);
			$i++;
		}
	}

	public function getRess()
	{
		return ($this->_ress);
	}

	/**
	 * @return int
	 */
	public function getRessCount(): int
	{
		return ($this->_ressCount);
	}

	public function setBuildings(): void
	{
		global $sql;

		if ($sql instanceof Sql)
		{
			$result = $sql->select(Sql::$table_buildings, NULL);
			$this->_buildingsCount = $result["count"];
			if ($result["count"] > 0)
			{
				if ($result["count"] > 1)
				{
					$i = 0;
					foreach ($result["datas"] as $row) {
						$building = new Building($this);
						if ($building instanceof Building)
						{
							$building->loadFromDbById(Sql::$table_buildings, $row['id']);
							$building->setInitialPrice(explode(",", $row["initial_amount"]));
							$building->setInitialProd(explode(",", $row["initial_production"]));
							$building->setInitialStorage(explode(",", $row["initial_storage"]));
							$building->setProgressPrice(explode(",", $row["progress_amount"]));
							$building->setProgressProduction(explode(",", $row["progress_production"]));
							$building->setProgressStorage(explode(",", $row["progress_storage"]));
							$building->setTime($row["initial_time"]);
							$building->setProgressTime($row["progress_time"]);
							$building->setMaxLevel(intval($row["max_level"]));
							$building->setInitialPoint($row["initial_point"]);
							$building->setEvolutionPoint($row["progress_point"]);
							if ($row["active_construct_instant"])
								$building->setInstantBuild(true);
							if ($row["active_construct_infinite"])
								$building->setInfiniteBuilding(true);
							if ($row["active_point"])
								$building->setActivatePoint(true);
						}
						$this->_buildings[$i] = $building;
						$i++;
					}
				}
				else
				{
					$this->_buildings = new Building($this);
					$this->_buildings->loadFromDbById(Sql::$table_buildings, $result["datas"]['id']);
					$this->_buildings->setInitialPrice(explode(",", $result["datas"]["initial_amount"]));
					$this->_buildings->setInitialProd(explode(",", $result["datas"]["initial_production"]));
					$this->_buildings->setInitialStorage(explode(",", $result["datas"]["initial_storage"]));
					$this->_buildings->setProgressPrice(explode(",", $result["datas"]["progress_amount"]));
					$this->_buildings->setProgressProduction(explode(",", $result["datas"]["progress_production"]));
					$this->_buildings->setProgressStorage(explode(",", $result["datas"]["progress_storage"]));
					$this->_buildings->setTime(explode(",", $result["datas"]["initial_time"]));
					$this->_buildings->setProgressTime(explode(",", $result["datas"]["progress_time"]));
					$this->_buildings->setMaxLevel(intval($result["datas"]["max_level"]));
					$this->_buildings->setInitialPoint($result["datas"]["initial_point"]);
					$this->_buildings->setEvolutionPoint($result["datas"]["progress_point"]);
					if ($result["datas"]["active_construct_instant"])
						$this->_buildings->setInstantBuild(true);
					if ($result["datas"]["active_construct_infinite"])
						$this->_buildings->setInfiniteBuilding(true);
					if ($result["datas"]["active_point"])
						$this->_buildings->setActivatePoint(true);
				}
			}
		}
	}

	public function getBuildings()
	{
		return ($this->_buildings);
	}
}
