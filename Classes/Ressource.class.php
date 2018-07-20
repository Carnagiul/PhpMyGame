<?php
/**
 * Created by PhpStorm.
 * User: Schtroumpfette
 * Date: 03/07/2018
 * Time: 11:01
 */

class Ressource
{
    use Entity;

    private $_amount;
    private $_storage;
    private $_production;
    private $_cost;

    /**
     * @param int $amount
     */
    public function setRessAmount(int $amount): void
    {
        $this->_amount = $amount;
    }

    /**
     * @return int
     */
    public function getRessAmount(): int
    {
        return ($this->_amount);
    }

    /**
     * @param int $amount
     */
    public function addRessAmount(int $amount)
    {
        $this->_amount += $amount;
        if ($this->_amount > $this->_storage)
            $this->setRessAmount($this->getRessStorage());
    }

    public function addRessAmountWS(int $amount)
    {
        $this->_amount += $amount;
    }

    /**
     * @param int $amount
     */
    public function removeRessAmount(int $amount)
    {
        $this->_amount -= $amount;
        if ($this->_amount < 0)
            $this->setRessAmount(0);
    }

    /**
     * @param int $amount
     */
    public function setRessStorage(int $amount): void
    {
        $this->_storage = $amount;
    }

    /**
     * @return int
     */
    public function getRessStorage(): int
    {
        return ($this->_storage);
    }

    /**
     * @param int $amount
     */
    public function addRessStorage(int $amount)
    {
        $this->_storage += $amount;
    }

    /**
     * @param int $amount
     */
    public function removeRessStorage(int $amount)
    {
        $this->_storage -= $amount;
        if ($this->_storage < 0)
            $this->setRessStorage(0);
    }

    /**
     * @param int $amount
     */
    public function setRessProduction(int $amount): void
    {
        $this->_production = $amount;
    }

    /**
     * @return int
     */
    public function getRessProduction(): int
    {
        return ($this->_production);
    }

    /**
     * @param int $amount
     */
    public function addRessProduction(int $amount)
    {
        $this->_production += $amount;
    }

    /**
     * @param int $amount
     */
    public function removeRessProduction(int $amount)
    {
        $this->_production -= $amount;
    }

    /**
     * @param int $level
     * @param int $exp
     * @param int $base
     */
    public function setCost(int $level, int $exp, int $base)
    {
        $cost = $base;
        for ($i = 1; $i <= $level; $i++)
            $cost *= $exp;
        $this->_cost = $cost;
    }

    /**
     * @return int
     */
    public function getCost(): int
    {
        return ($this->_cost);
    }

    /**
     * @param Ressource $ress
     * @return int
     */
    public function haveEnough(Ressource $ress)
    {
        if ($ress->getId() == $this->getId())
        {
            if ($ress->getCost() > 0)
                if ($this->getRessAmount() - $ress->getCost() >= 0)
                    return (0);
            return (1);
        }
        return (-1);
    }
}
