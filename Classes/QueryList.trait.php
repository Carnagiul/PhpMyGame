<?php
/**
 * Created by PhpStorm.
 * User: tonpeyre
 * Date: 27/07/2018
 * Time: 12:55
 */

trait QueryList
{
    private static $limit_construct = 1;

    public function CanAddBuildingInConstructionList()
    {
        global $sql;
        global $node;
        global $user;

        if (isset($user) && isset($node) && $user instanceof User && $node instanceof Node)
        {
            $ret = $sql->select(Sql::$table_node_construction, array("node_id" => $node->getId()));
            if ($ret["count"] < self::$limit_construct)
                return (true);
            return (false);
        }
        return (false);
    }

    public function CanAddBuildingInConstructionListMixed()
    {
        global $sql;
        global $node;
        global $user;

        if (isset($user) && isset($node) && $user instanceof User && $node instanceof Node)
        {
            $ret = $sql->select(Sql::$table_node_construction, array("node_id" => $node->getId()));
            if ($ret["count"] < self::$limit_construct)
                $ret["result"] = true;
            $ret["result"] = false;
        }
        $ret["result"] = false;
        return ($ret);
    }

    public function AddBuildingInConstructionList(Building $b)
    {
        global $sql;
        global $node;
        global $user;

        if (isset($user) && isset($node) && $user instanceof User && $node instanceof Node)
        {
            $ret = $this->CanAddBuildingInConstructionListMixed();
            if ($ret["result"] == true)
            {
                $array["time_total"] = $b->getCalculateTime();
                $array["time_left"] = $b->getCalculateTime();
                foreach ($b->getCalcRess() as $ress)
                    $array["ress_cost"][] = $ress->getRessAmount();
                $array["pos"] = $ret["count"] + 1;
                
            }
        }

    }
}