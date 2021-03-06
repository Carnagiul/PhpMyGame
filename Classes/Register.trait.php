<?php
/**
 * Created by PhpStorm.
 * User: Schtroumpfette
 * Date: 28/06/2018
 * Time: 13:28
 */

trait Register
{
    use Credential;
    private $_register_error;

    /*
     * TODO Notification implements
     */

    /**
     * @param string $mail
     * @return int
     */
    private function RegisterValidateMail(string $mail): int
    {
        global $sql;

        if (!(filter_var($mail, FILTER_VALIDATE_EMAIL)))
        {
            $this->_register_error[] = "register_email_not_valid";
            return (1);
        }
        if ($sql instanceof Sql)
        {
            $request = $sql->select(Sql::$table_users, array("mail" => $mail));
            if ($request["datas"] && $request["datas"]["mail"] == $mail)
            {
                $this->_register_error[] = "register_email_already_exist";
                return (1);
            }
            return (0);
        }
        $this->_register_error[] = "sql_not_connected";
        return (-1);
    }

    /**
     * @param string $name
     * @return int
     */
    private function RegisterValidateName(string $name): int
    {
        global $sql;

        if ($sql instanceof Sql)
        {
            $request = $sql->select(Sql::$table_users, array("name" => $name));
            if ($request["datas"] && $request["datas"]["name"] == $name)
            {
                $this->_register_error[] = "register_name_already_exist";
                return (1);
            }
            return (0);
        }
        $this->_register_error[] = "sql_not_connected";
        return (-1);
    }

    private function RegisterVerifyPassword(string $password, string $username): int
    {
        if (strlen($password) <= 8)
            $this->_register_error[] = "register_password_too_easy";
        if (strcmp($password, $username) == 0)
            $this->_register_error[] = "register_password_same_as_name";
        if (strcmp($password, strrev($username)) == 0)
            $this->_register_error[] = "register_password_same_as_revname";
        return (0);
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $mail
     * @return int
     */
    private function RegisterUser(string $username, string $password, string $mail): int
    {
        global $sql;
        global $server;

        if ($sql instanceof Sql)
        {
            $array = array("name" => $username, "pass" => $this->CredentialHashPass($password), "mail" => $mail);
            $ret = $sql->insert(Sql::$table_users, $array);
            $user = $sql->select(Sql::$table_users, array("name" => $username));

            $b = NULL;
            foreach ($server->getBuildings() as $building)
            {
                if ($building instanceof Building)
                    $b[] = array("id" => $building->getId(), "level" => 0);
            }
            $r = NULL;
            foreach ($server->getRess() as $ress)
            {
                if ($ress instanceof Ressource)
                {
                    $r["Amount"][] = 1000;
                    $r["Storage"][] = 1000;
                    $r["Production"][] = 10;
                }
            }

            $array2 = array("name" => "Village de " . $username, "buildings" => json_encode($b), "ressources" => json_encode($r), "last_update" => time(), "owner" => $user["datas"]["id"]);
            $ret2 = $sql->insert(Sql::$table_node, $array2);
            $node = $sql->select(Sql::$table_node, array("owner" => $user["datas"]["id"]));
            $ret3  =$sql->update(Sql::$table_users, array("actual_node" => $node["datas"]["id"]), array("id" => $user["datas"]["id"]));
            return (0);
        }
        $this->_register_error[] = "sql_not_connected";
        return (-1);
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $mail
     * @return int
     */
    public function RegisterNewUser(string $username, string $password, string $mail): int
    {

        $this->RegisterValidateMail($mail);
        $this->RegisterValidateName($username);
        $this->RegisterVerifyPassword($password, $username);

        if (isset($this->_register_error))
            return (1);
        else
            return ($this->RegisterUser($username, $password, $mail));
    }
}
