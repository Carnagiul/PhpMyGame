<?php
/**
 * Created by PhpStorm.
 * User: tonpeyre
 * Date: 12/07/2018
 * Time: 18:29
 */

class Building
{
    use Entity;
    use Points;

    private $_ress;
    private $_ProgressRess;
    private $_CalcRess;
    private $_ressCount;
    private $_Time;
    private $_ProgressTime;
    private $_CalculateTime;
    private $_MaxLevel;
    private $_InstantBuild = false;
    private $_InfiniteBuilding = false;
    private $_InitialCost;
    private $_InitialProd;
    private $_InitialStorage;
    private $_ProgressCost;
    private $_ProgressProd;
    private $_ProgressStorage;

    public function __construct(Server $server)
    {
        $this->_ressCount = $server->getRessCount();
        foreach ($server->getRess() as $ress)
        {
            $this->_ress[] = clone $ress;
            $this->_ProgressRess[] = clone $ress;
            $this->_CalcRess[] = clone $ress;
        }

    }

    public function setInitialPrice(array $data)
    {
        $i = 0;
        foreach ($this->_ress as $ress)
        {
            if ($ress instanceof Ressource)
            {
                if (isset($data[$i]))
                    $ress->setRessAmount(intval($data[$i++]));
                else
                    $ress->setRessAmount(0);
            }
        }
        $this->_InitialCost = implode(",", $data);
    }

    public function setInitialProd(array $data)
    {
        $i = 0;
        foreach ($this->_ress as $ress)
        {
            if ($ress instanceof Ressource)
            {
                if (isset($data[$i]))
                    $ress->setRessProduction(intval($data[$i++]));
                else
                    $ress->setRessProduction(0);
            }
        }
        $this->_InitialProd = implode(",", $data);
    }

    public function setInitialStorage(array $data)
    {
        $i = 0;
        foreach ($this->_ress as $ress)
        {
            if ($ress instanceof Ressource)
            {
                if (isset($data[$i]))
                    $ress->setRessStorage(intval($data[$i++]));
                else
                    $ress->setRessStorage(0);
            }
        }
        $this->_InitialStorage = implode(",", $data);
    }

    public function setProgressStorage(array $data)
    {
        $i = 0;
        foreach ($this->_ProgressRess as $ress)
        {
            if ($ress instanceof Ressource)
            {
                if (isset($data[$i]))
                    $ress->setRessStorage(intval($data[$i++]));
                else
                    $ress->setRessStorage(0);
            }
        }
        $this->_ProgressStorage = implode(",", $data);
    }

    public function setProgressProduction(array $data)
    {
        $i = 0;
        foreach ($this->_ProgressRess as $ress)
        {
            if ($ress instanceof Ressource)
            {
                if (isset($data[$i]))
                    $ress->setRessProduction(intval($data[$i++]));
                else
                    $ress->setRessProduction(0);
            }
        }
        $this->_ProgressProd = implode(",", $data);

    }

    public function setProgressPrice(array $data)
    {
        $i = 0;
        foreach ($this->_ProgressRess as $ress)
        {
            if ($ress instanceof Ressource)
            {
                if (isset($data[$i]))
                    $ress->setRessAmount(intval($data[$i++]));
                else
                    $ress->setRessAmount(0);
            }
        }
        $this->_ProgressCost = implode(",", $data);
    }

    public function calcRessPerLevel(int $level)
    {
        $i = 1;
        $this->setCalculateTime($this->getTime());
        for ($j = 0; isset($this->_ress[$j]); $j++)
        {
            $ress = $this->_ress[$j];
            $calc = $this->_CalcRess[$j];
            if ($ress instanceof Ressource && $calc instanceof Ressource)
            {
                $calc->setRessAmount($ress->getRessAmount());
                $calc->setRessProduction($ress->getRessProduction());
                $calc->setRessStorage($ress->getRessStorage());
            }
        }
        while ($i <= $level)
        {
            for ($j = 0; isset($this->_ress[$j]); $j++)
            {
                $ress = $this->_ress[$j];
                $prod = $this->_ProgressRess[$j];
                $calc = $this->_CalcRess[$j];
                if ($ress instanceof Ressource && $calc instanceof Ressource && $prod instanceof Ressource)
                {
                    $calc->addRessAmountWS($calc->getRessAmount() * ((($i * 100) + $prod->getRessAmount()) / 100));
                    $calc->addRessProduction($calc->getRessProduction() * ((($i * 100) + $prod->getRessProduction()) / 100));
                    $calc->addRessStorage($calc->getRessStorage() * ((($i * 100) + $prod->getRessStorage()) / 100));
                }
                $this->setCalculateTime($this->getCalculateTime() * ((($i * 100) + $this->getProgressTime()) / 100));
                echo $calc->getRessStorage() . " . Storage <br />";
                echo $calc->getRessProduction() . " . Production <br />";
                echo $calc->getRessAmount() . " . Amount <br />";
            }
            $i++;
        }
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->_Time;
    }

    /**
     * @param mixed $Time
     */
    public function setTime($Time)
    {
        $this->_Time = $Time;
    }

    /**
     * @return mixed
     */
    public function getProgressTime()
    {
        return $this->_ProgressTime;
    }

    /**
     * @param mixed $ProgressTime
     */
    public function setProgressTime($ProgressTime)
    {
        $this->_ProgressTime = $ProgressTime;
    }

    /**
     * @return mixed
     */
    public function getCalculateTime()
    {
        return $this->_CalculateTime;
    }

    /**
     * @param mixed $CalculateTime
     */
    public function setCalculateTime($CalculateTime)
    {
        $this->_CalculateTime = $CalculateTime;
    }

    public function setMaxLevel(int $level)
    {
        $this->_MaxLevel = $level;
    }

    /**
     * @return mixed
     */
    public function getMaxLevel()
    {
        return $this->_MaxLevel;
    }

    /**
     * @return bool
     */
    public function isInstantBuild(): bool
    {
        return $this->_InstantBuild;
    }

    /**
     * @param bool $InstantBuild
     */
    public function setInstantBuild(bool $InstantBuild)
    {
        $this->_InstantBuild = $InstantBuild;
    }

    /**
     * @return bool
     */
    public function isInfiniteBuilding(): bool
    {
        return $this->_InfiniteBuilding;
    }

    /**
     * @param bool $InfiniteBuilding
     */
    public function setInfiniteBuilding(bool $InfiniteBuilding)
    {
        $this->_InfiniteBuilding = $InfiniteBuilding;
    }

    /**
     * @return mixed
     */
    public function getInitialCost()
    {
        return $this->_InitialCost;
    }

    /**
     * @return mixed
     */
    public function getInitialProd()
    {
        return $this->_InitialProd;
    }

    /**
     * @return mixed
     */
    public function getInitialStorage()
    {
        return $this->_InitialStorage;
    }

    /**
     * @return mixed
     */
    public function getProgressCost()
    {
        return $this->_ProgressCost;
    }

    /**
     * @return mixed
     */
    public function getProgressProd()
    {
        return $this->_ProgressProd;
    }

    /**
     * @return mixed
     */
    public function getProgressStorage()
    {
        return $this->_ProgressStorage;
    }
}
