<?php

Trait Entity
{
    public $_id = 0;
    public $_name = "";
    public $_descr = "";
    public $_img = "";

    /**
     * @return String
     * @param void
     */

    public function getImage(): string
    {
        return $this->_img;
    }

    /**
     * @param String $img
     * @return Void
     */

    public function setImage(string $img = ""): void
    {
        $this->_img = $img;
    }

    /**
     * @return String
     * @param void
     */

    public function getName(): string
    {
        return $this->_name;
    }

    /**
     * @param String $name
     * @return Void
     */

    public function setName(string $name = ""): void
    {
        $this->_name = $name;
    }

    /**
     * @return String
     * @param void
     */

    public function getDescr(): string
    {
        return $this->_descr;
    }

    /**
     * @param String $descr
     * @return Void
     */

    public function setDescr(string $descr = ""): void
    {
        $this->_descr = $descr;
    }

    /**
     * @return integer
     * @param void
     */

    public function getId(): int
    {
        return $this->_id;
    }

    /**
     * @param integer $id
     * @return Void
     */

    public function setId(int $id = -1): void
    {
        $this->_id = $id;
    }

    /**
     * @param string $table
     * @param int $id
     */
    public function loadFromDbById(string $table, int $id): void
    {
        global $sql;

        if ($sql instanceof Sql)
        {
            $result = $sql->select($table, array("id" => $id));
            if ($result["datas"])
            {
                $this->setName($result["datas"]["name"]);
                $this->setId($id);
                $this->setDescr($result["datas"]["descr"]);
                $this->setImage($result["datas"]["img"]);
            }
        }
    }
}
