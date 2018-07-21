<?php
/**
 * Created by PhpStorm.
 * User: Schtroumpfette
 * Date: 28/06/2018
 * Time: 12:54
 */

trait Credential
{

    /**
     * @param string $password
     * @return string
     */
    private function CredentialHashPass(string $password): string
    {
        return (hash("sha512", $password));
    }

    /**
     * @param string $credential
     * @return array
     */
    public function CredentialIsMailMixed(string $credential): array
    {
        global $sql;
        global $lang;

        if ($sql instanceof Sql)
        {
            $request = $sql->select(Sql::$table_users, array("mail" => $credential));
            if ($request["datas"] && $request["datas"]["mail"] == $credential)
                return (array("msg" => sprintf($lang["fr"]["user_credential_is_mail"], $credential), "value" => 0, "title" => "Succès"));
            return (array("msg" => sprintf($lang["fr"]["user_credential_is_not_mail"], $credential), "value" => 1, "title" => "Error"));
        }
        return (array("msg" => sprintf($lang["fr"]["sql_not_connected"]), "value" => -1, "title" => "Error"));
    }

    /**
     * @param string $credential
     * @return string
     */
    public function CredentialIsMailString(string $credential): string
    {
        $data = $this->CredentialIsMailMixed($credential);
        return ($data["msg"]);
    }

    /**
     * @param string $credential
     * @return int
     */
    public function CredentialIsMail(string $credential): int
    {
        $data = $this->CredentialIsMailMixed($credential);
        return ($data["value"]);
    }

    public function CredentialIsUsernameMixed(string $credential): array
    {
        global $sql;
        global $lang;

        if ($sql instanceof Sql)
        {
            $request = $sql->select(Sql::$table_users, array("name" => $credential));
            if ($request["datas"] && $request["datas"]["name"] == $credential)
                return (array("msg" => sprintf($lang["fr"]["user_credential_is_name"], $credential), "value" => 0, "title" => "Succès"));
            return (array("msg" => sprintf($lang["fr"]["user_credential_is_not_name"], $credential), "value" => 1, "title" => "Error"));
        }
        return (array("msg" => sprintf($lang["fr"]["sql_not_connected"]), "value" => -1, "title" => "Error"));
    }


    /**
     * @param string $credential
     * @return string
     */
    public function CredentialIsUsernameString(string $credential): string
    {
        $data = $this->CredentialIsUsernameMixed($credential);
        return ($data["msg"]);
    }

    /**
     * @param string $credential
     * @return int
     */
    public function CredentialIsUsername(string $credential): int
    {
        $data = $this->CredentialIsUsernameMixed($credential);
        return ($data["value"]);
    }

    /**
     * @param string $credential
     * @param string $password
     * @return int
     */
    public function CredentialLoginMail(string $credential, string $password): int
    {
        $data = $this->CredentialLoginMailMixed($credential, $password);
        return ($data["value"]);
    }

    /**
     * @param string $credential
     * @param string $password
     * @return string
     */
    public function CredentialLoginMailString(string $credential, string $password): string
    {
        $data = $this->CredentialLoginMailMixed($credential, $password);
        return ($data["msg"]);
    }

    /**
     * @param string $credential
     * @param string $password
     * @return array
     */
    public function CredentialLoginMailMixed(string $credential, string $password): array
    {
        global $sql;
        global $lang;

        if ($sql instanceof Sql)
        {
            $request = $sql->select(Sql::$table_users, array("mail" => $credential, "pass" => $this->CredentialHashPass($password)));
            if ($request["datas"] && $request["datas"]["mail"] == $credential)
            {
                $_SESSION["user"]["name"] = $request["datas"]["name"];
                $_SESSION["user"]["pass"] = $password;
                return (array("msg" => sprintf($lang["fr"]["user_credential_mail_login_in"], $credential), "value" => 0, "title" => "Succès"));
            }
            return (array("msg" => sprintf($lang["fr"]["user_credential_not_exist"], $credential), "value" => 1, "title" => "Error"));
        }
        return (array("msg" => sprintf($lang["fr"]["sql_not_connected"]), "value" => -1, "title" => "Error"));
    }

    /**
     * @param string $credential
     * @param string $password
     * @return int
     */
    public function CredentialLoginName(string $credential, string $password): int
    {
        $data = $this->CredentialLoginNameMixed($credential, $password);
        return ($data["value"]);
    }

    /**
     * @param string $credential
     * @param string $password
     * @return string
     */
    public function CredentialLoginNameString(string $credential, string $password): string
    {
        $data = $this->CredentialLoginNameMixed($credential, $password);
        return ($data["msg"]);
    }

    /**
     * @param string $credential
     * @param string $password
     * @return array
     */
    public function CredentialLoginNameMixed(string $credential, string $password): array
    {
        global $sql;
        global $lang;

        if ($sql instanceof Sql)
        {
            $request = $sql->select(Sql::$table_users, array("name" => $credential, "pass" => $this->CredentialHashPass($password)));
            if ($request["datas"] && $request["datas"]["name"] == $credential)
            {
                $_SESSION["user"]["name"] = $credential;
                $_SESSION["user"]["pass"] = $password;
                return (array("msg" => sprintf($lang["fr"]["user_credential_name_login_in"], $credential), "value" => 0, "title" => "Succès"));
            }
            return (array("msg" => sprintf($lang["fr"]["user_credential_not_exist"], $credential), "value" => 1, "title" => "Error"));
        }
        return (array("msg" => sprintf($lang["fr"]["sql_not_connected"]), "value" => -1, "title" => "Error"));
    }


    /**
     * @param string $name
     * @param string $password
     * @return int
     */
    public function CredentialIsLogged(string $name, string $password): int
    {
        $data = $this->CredentialIsLoggedMixed($name, $password);
        return ($data["value"]);
    }

    /**
     * @param string $name
     * @param string $password
     * @return string
     */
    public function CredentialIsLoggedString(string $name, string $password): string
    {
        $data = $this->CredentialIsLoggedMixed($name, $password);
        return ($data["msg"]);
    }

    /**
     * @param string $name
     * @param string $password
     * @return array
     */
    public function CredentialIsLoggedMixed(string $name, string $password): array
    {
        global $lang;

        if (isset($_SESSION["user"]))
            return (array("msg" => sprintf($lang["fr"]["user_credential_already_exist"], $name, $_SESSION["user"]["name"]), "value" => 2, "title" => "Error"));
        return ($this->CredentialLoginMixed($name, $password));
    }

    /**
     * @param string $name
     * @param string $password
     * @return int
     */
    public function CredentialLogin(string $name, string $password): int
    {
        $data = $this->CredentialLoginMixed($name, $password);
        return ($data["value"]);
    }

    /**
     * @param string $name
     * @param string $password
     * @return string
     */
    public function CredentialLoginString(string $name, string $password): string
    {
        $data = $this->CredentialLoginMixed($name, $password);
        return ($data["msg"]);
    }

    /**
     * @param string $name
     * @param string $password
     * @return array
     */
    public function CredentialLoginMixed(string $name, string $password): array
    {
        global $sql;
        global $lang;

        if ($sql instanceof Sql)
        {
            if (isset($_SESSION["user"]))
                return ($this->CredentialLoginNameMixed($_SESSION["user"]["name"], $_SESSION["user"]["pass"]));
            if ($this->CredentialIsMail($name) == 0)
                return ($this->CredentialLoginMailMixed($name, $password));
            if ($this->CredentialIsUsername($name) == 0)
                return ($this->CredentialLoginNameMixed($name, $password));
            return (array("msg" => sprintf($lang["fr"]["user_credential_not_exist"], $name), "value" => 1, "title" => "Error"));
        }
        return (array("msg" => sprintf($lang["fr"]["sql_not_connected"]), "value" => -1, "title" => "Error"));
    }
}
