<?php
/**
 * Created by PhpStorm.
 * User: tonpeyre
 * Date: 20/07/2018
 * Time: 12:37
 */

class Node
{
    use Entity;
    use Points;

    private $_Ress;
    private $_Buildings;
    private $_LastUpdate = 0;

    public function __construct()
    {
        global $server;

        if (is_array($server->getRess()))
        {
            foreach ($server->getRess() as $ress)
                $this->_Ress[] = clone $ress;
        }
        else
            $this->_Ress = clone $server->getRess();

        if (is_array($server->getBuildings()))
        {
            foreach ($server->getBuildings() as $building)
                $this->_Buildings[] = clone $building;
        }
        else
            $this->_Buildings = clone $server->getBuildings();
    }

    public function getRess()
    {
        return ($this->_Ress);
    }

    public function getBuildings()
    {
        return ($this->_Buildings);
    }

    public function getBuildingById(int $id)
    {
        if (is_array($this->_Buildings))
        {
            foreach ($this->_Buildings as $b)
            {
                if ($b instanceof Building)
                {
                    if ($b->getId() == $id)
                        return ($b);
                }
            }
        }
    }

    public function setNodeRessAmountString(String $ress)
    {
        $array = explode(",", $ress);
        $i = 0;
        if (is_array($this->_Ress))
        {
            while (isset($this->_Ress[$i]))
            {
                $data = $this->_Ress[$i];
                if ($data instanceof Ressource)
                    $data->setRessAmount((isset($array[$i])) ? $array[$i] : 0);
                $this->_Ress[$i++] = $data;
            }
        }
        else
            if ($this->_Ress instanceof Ressource)
                $this->_Ress->setRessAmount((isset($array[0])) ? $array[0] : 0);
    }

    public function setNodeRessProductionString(String $ress)
    {
        $array = explode(",", $ress);
        $i = 0;
        if (is_array($this->_Ress))
        {
            while (isset($this->_Ress[$i]))
            {
                $data = $this->_Ress[$i];
                if ($data instanceof Ressource)
                    $data->setRessProduction((isset($array[$i])) ? $array[$i] : 0);
                $this->_Ress[$i++] = $data;
            }
        }
        else
            if ($this->_Ress instanceof Ressource)
                $this->_Ress->setRessProduction((isset($array[0])) ? $array[0] : 0);
    }

    public function setNodeRessStorageString(String $ress)
    {
        $array = explode(",", $ress);
        $i = 0;
        if (is_array($this->_Ress))
        {
            while (isset($this->_Ress[$i]))
            {
                $data = $this->_Ress[$i];
                if ($data instanceof Ressource)
                    $data->setRessStorage((isset($array[$i])) ? $array[$i] : 0);
                $this->_Ress[$i++] = $data;
            }
        }
        else
            if ($this->_Ress instanceof Ressource)
                $this->_Ress->setRessStorage((isset($array[0])) ? $array[0] : 0);
    }

    public function setNodeRessAmountArray(Array $array)
    {
        $i = 0;
        if (is_array($this->_Ress))
        {
            while (isset($this->_Ress[$i]))
            {
                $data = $this->_Ress[$i];
                if ($data instanceof Ressource)
                    $data->setRessAmount((isset($array[$i])) ? $array[$i] : 0);
                $this->_Ress[$i++] = $data;
            }
        }
        else
            if ($this->_Ress instanceof Ressource)
                $this->_Ress->setRessAmount((isset($array[0])) ? $array[0] : 0);
    }

    public function setNodeRessProductionArray(Array $array)
    {
        $i = 0;
        if (is_array($this->_Ress))
        {
            while (isset($this->_Ress[$i]))
            {
                $data = $this->_Ress[$i];
                if ($data instanceof Ressource)
                    $data->setRessProduction((isset($array[$i])) ? $array[$i] : 0);
                $this->_Ress[$i++] = $data;
            }
        }
        else
            if ($this->_Ress instanceof Ressource)
                $this->_Ress->setRessProduction((isset($array[0])) ? $array[0] : 0);
    }

    public function setNodeRessStorageArray(Array $array)
    {
        $i = 0;
        if (is_array($this->_Ress))
        {
            while (isset($this->_Ress[$i]))
            {
                $data = $this->_Ress[$i];
                if ($data instanceof Ressource)
                    $data->setRessStorage((isset($array[$i])) ? $array[$i] : 0);
                $this->_Ress[$i++] = $data;
            }
        }
        else
            if ($this->_Ress instanceof Ressource)
                $this->_Ress->setRessStorage((isset($array[0])) ? $array[0] : 0);
    }

    public function setNodeRessJsonString(String $json)
    {
        $data = json_decode($json, true);

        if (is_array($data))
        {
            foreach ($data as $title => $value)
            {
                if ($title == "Actual")
                    $this->setNodeRessAmountArray($value);
                if ($title == "Production")
                    $this->setNodeRessProductionArray($value);
                if ($title == "Storage")
                    $this->setNodeRessStorageArray($value);
            }
        }
    }

    public function setNodeBuildingString(String $building)
    {
        $array = explode(",", $building);
        $i = 0;
        if (is_array($this->_Buildings))
        {
            while (isset($this->_Buildings[$i]))
            {
                $b = $this->_Buildings[$i];
                if ($b instanceof Building)
                    $b->setActualLevel((isset($array[$i])) ? intval($array[$i++]) : 0);
            }
        }
        else
            if ($this->_Buildings instanceof Building)
                $this->_Buildings->setActualLevel((isset($array[0])) ? intval($array[0]) : 0);
    }

    public function setNodeBuildingArray(Array $array)
    {
        $i = 0;
        if (is_array($this->_Buildings))
        {
            while (isset($this->_Buildings[$i]))
            {
                $b = $this->_Buildings[$i];
                if ($b instanceof Building)
                    $b->setActualLevel((isset($array[$i])) ? intval($array[$i++]) : 0);
            }
        }
        else
            if ($this->_Buildings instanceof Building)
                $this->_Buildings->setActualLevel((isset($array[0])) ? intval($array[0]) : 0);
    }

    public function setNodeBuildingJson(String $json)
    {
       $decode = json_decode($json, true);
       if (is_array($decode))
       {
           foreach ($decode as $item)
           {
               if (isset($item["id"]))
               {
                   $b = NULL;
                   $b = $this->getBuildingById(intval($item["id"]));
                   if (isset($item["level"]))
                   {
                       $b->setActualLevel(intval($item["level"]));
                       $b->calcRessPerLevel(intval($item["level"]));
                   }
               }
           }
       }
    }

    public function setNodeDataWithId(int $id)
    {
        global $sql;

        $result = $sql->select(Sql::$table_node, array("id" => $id));
        if ($result["datas"])
        {
            $this->setNodeBuildingJson($result["datas"]["buildings"]);
            $this->setNodeRessJsonString($result["datas"]["ressources"]);
            $this->setName($result["datas"]["name"]);
            $this->setLastUpdate($result["datas"]["last_update"]);
            $this->AddProductionOnBase();
            $this->setId($id);

        }
    }

    public function updateNodeData()
    {
        global $sql;

        if ($this->getId() > 0)
        {
            $buildings = NULL;
            foreach ($this->_Buildings as $b)
            {
                if ($b instanceof Building)
                    $buildings[] = array("id" => $b->getId(), "level" => $b->getActualLevel());
            }
            $prod = NULL;
            $actual = NULL;
            $storage = NULL;
            foreach ($this->_Ress as $ress)
            {
                if ($ress instanceof Ressource)
                {
                 $prod[] = $ress->getRessProduction();
                 $storage[] = $ress->getRessStorage();
                 $actual[] = $ress->getRessAmount();
                }
            }
            $result_ress = array("Storage" => $storage, "Production" => $prod, "Actual" => $actual);
            $json_ress = json_encode($result_ress);
            $json_building = json_encode($buildings);
            $request = $sql->update(Sql::$table_node, array("name" => $this->getName(), "buildings" => $json_building, "ressources" => $json_ress, "last_update" => time()), array("id" => $this->getId()));
            return ($request);
        }
    }

    /**
     * @return int
     */
    public function getLastUpdate(): int
    {
        return $this->_LastUpdate;
    }

    /**
     * @param int $LastUpdate
     */
    public function setLastUpdate(int $LastUpdate)
    {
        $this->_LastUpdate = $LastUpdate;
    }

    private function AddProductionOnBase()
    {
        foreach ($this->_Ress as $ress)
        {
            if ($ress instanceof Ressource)
            {
                $prod = ($ress->getRessProduction()) * (time() - $this->getLastUpdate());
                $ress->addRessAmount($prod);
            }
        }
    }

}