<?php
/**
 * Created by PhpStorm.
 * User: Schtroumpfette
 * Date: 23/06/2018
 * Time: 10:14
 */

define ("_BDD_HOSTNAME_", "localhost");
define ("_BDD_NAME_", "minegamers");
define ("_BDD_USERNAME_", "piqueur");
define ("_BDD_PASSWORD_", "");

define("BDD_HOST", _BDD_HOSTNAME_);
define("BDD_NOM", _BDD_NAME_);
define("BDD_USER", _BDD_USERNAME_);
define("BDD_PASS", _BDD_PASSWORD_);

class Sql
{
    private $sql;
    private $nombrerequetes;
    public static $table_ressources = "ressources";
    public static $table_users = "users";
    public static $table_buildings = "buildings";

    public function connect()
    {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        );
        $this->sql = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NOM, BDD_USER, BDD_PASS, $options);
        $this->nombrerequetes = 0;
    }

    public function select($table, $datas)
    {
        if (!(isset($this->sql)))
            return (NULL);
        if ($datas != NULL)
        {
            $query = "SELECT * FROM `$table` WHERE";
            $where = "";
            $params = NULL;
            $i = 0;
            foreach ($datas as $key => $value)
            {
                if ($i++ > 0)
                    $where .= "AND";
                $where .= " `$key`=? ";
                $params[] .= $value;
            }
        }
        else
        {
            $query = "SELECT * FROM `$table`";
            $where = "";
            $params = NULL;
        }
        $ret["values"] = $datas;
        $ret["query"] = $query . $where;
        $ret["prepare"] = $this->sql->prepare($query . $where);
        $ret["execute"] = $ret["prepare"]->execute($params);
        $ret["count"] = $ret["prepare"]->rowCount();
        if ($ret["count"] >= 1)
        {
            if ($ret["count"] > 1)
                $ret["datas"] = $ret["prepare"]->fetchall(PDO::FETCH_ASSOC);
            else
                $ret["datas"] = $ret["prepare"]->fetch(PDO::FETCH_ASSOC);
        }
        else
            $ret["datas"] = NULL;
        $this->nombrerequetes++;
        return ($ret);
    }

    /**
     * @param $table
     * @param $datas
     * @return null
     */
    public function insert($table, $datas)
    {
        if (!(isset($this->sql)))
            return (NULL);
        $where = "";
        $set = "";
        $params = NULL;
        $i = 0;
        foreach ($datas as $key => $value)
        {
            if ($i++ > 0)
            {
                $where .= ",";
                $set .= ",";

            }
            $where .= " `$key` ";
            $set .= " ? ";
            $params[] .= $value;
        }
        $query = "INSERT INTO `$table` ($where) VALUES ($set)";
        $ret["values"] = $datas;
        $ret["query"] = $query;
        $ret["prepare"] = $this->sql->prepare($query);
        $ret["execute"] = $ret["prepare"]->execute($params);
        $ret["count"] = 0;
        $ret["datas"] = NULL;
        $this->nombrerequetes++;
        return ($ret);
    }

    /**
     * @param $table
     * @param $datas
     * @return null
     */
    public function update($table, $datas, $datas_where)
    {
        if (!(isset($this->sql)))
            return (NULL);
        $where = "";
        $set = "";
        $params = NULL;
        $i = 0;
        foreach ($datas as $key => $value)
        {
            if ($i++ > 0)
                $where .= ",";
            $where .= " `$key`=? ";
            $params[] .= $value;
        }
        $i = 0;
        foreach ($datas_where as $key => $value)
        {
            if ($i++ > 0)
                $set .= " AND ";
            $set .= " `$key`=? ";
            $params[] .= $value;
        }
        $query = "UPDATE `$table` SET $where WHERE ($set)";
        $ret["values"] = $datas;
        $ret["values_where"] = $datas_where;
        $ret["query"] = $query;
        $ret["prepare"] = $this->sql->prepare($query);
        $ret["execute"] = $ret["prepare"]->execute($params);
        $ret["count"] = 0;
        $ret["datas"] = NULL;
        $this->nombrerequetes++;
        return ($ret);
    }

    public function delRow($table, $datas)
    {
        if (!(isset($this->sql)))
            return (NULL);
        $where = "";
        $params = NULL;
        $i = 0;
        foreach ($datas as $key => $value)
        {
            if ($i++ > 0)
                $where .= " AND ";
            $where .= " `$key`=? ";
            $params[] .= $value;
        }
        $query = "DELETE FROM `$table` WHERE $where";
        $ret["values"] = $datas;
        $ret["query"] = $query;
        $ret["prepare"] = $this->sql->prepare($query);
        $ret["execute"] = $ret["prepare"]->execute($params);
        $ret["count"] = 0;
        $ret["datas"] = NULL;
        $this->nombrerequetes++;
        return ($ret);
    }
}
