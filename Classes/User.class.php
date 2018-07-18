<?php
/**
 * Created by PhpStorm.
 * User: Schtroumpfette
 * Date: 12/06/2018
 * Time: 15:59
 */

class User
{
    use Entity;
    use Register;

    public function __construct()
    {
        return ;
    }

    public function __destruct()
    {
        return ;
    }

    public function LoadPlayerById(int $id): string
    {
        global $sql;
        global $lang;

        if ($sql instanceof Sql)
        {
            $result = $sql->select("phpsim_users", array("id" => $id));
            if ($result["datas"])
            {
                if ($result["datas"]["id"] == $id)
                {
                    $this->setId($result["datas"]["id"]);
                    $this->setName($result["datas"]["nom"]);
                    $this->setDescr($result["datas"]["mail"]);
                    $this->setImage($result["datas"]["race"]);
                    return (sprintf($lang["fr"]["user_id_loaded"], $id));
                }
                return (sprintf($lang["fr"]["user_id_not_found"], $id));
            }
            return (sprintf($lang["fr"]["user_id_not_found"], $id));
        }
        return (sprintf($lang["fr"]["sql_not_connected"]));
    }

    public function LoadPlayerByName(string $name): string
    {
        global $sql;
        global $lang;

        if ($sql instanceof Sql)
        {
            $result = $sql->select("phpsim_users", array("nom" => $name));
            if ($result["datas"])
            {
                if ($result["datas"]["nom"] == $name)
                {
                    $this->setId($result["datas"]["id"]);
                    $this->setName($result["datas"]["nom"]);
                    $this->setDescr($result["datas"]["mail"]);
                    $this->setImage($result["datas"]["race"]);
                    return (sprintf($lang["fr"]["user_name_loaded"], $name));
                }
                return (sprintf($lang["fr"]["user_name_not_found"], $name));
            }
            return (sprintf($lang["fr"]["user_name_not_found"], $name));
        }
        return (sprintf($lang["fr"]["sql_not_connected"]));
    }

    public function getIp()
    {
        if (getenv('HTTP_CLIENT_IP'))
            return (getenv('HTTP_CLIENT_IP'));
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            return (getenv('HTTP_X_FORWARDED_FOR'));
        else if(getenv('HTTP_X_FORWARDED'))
            return (getenv('HTTP_X_FORWARDED'));
        else if(getenv('HTTP_FORWARDED_FOR'))
            return (getenv('HTTP_FORWARDED_FOR'));
        else if(getenv('HTTP_FORWARDED'))
            return (getenv('HTTP_FORWARDED'));
        else if(getenv('REMOTE_ADDR'))
            return (getenv('REMOTE_ADDR'));
        else
            return (0);
    }
}
