<?php
/**
 * Created by PhpStorm.
 * User: tonpeyre
 * Date: 15/07/2018
 * Time: 14:14
 */

trait Points
{
    private $_initialPoint;
    private $_evolutionPoint;
    private $_calculatedPoint;
    private $_Point;
    private $_Activate_point = false;

    public function setPoint(int $point): void
    {
        $this->_Point = $point;
    }

    public function getPoint(): int
    {
        return ($this->_Point);
    }

    public function addPoint(int $point): void
    {
        $this->_Point += $point;
    }

    /**
     * @return mixed
     */
    public function getInitialPoint()
    {
        return $this->_initialPoint;
    }

    /**
     * @param mixed $initialPoint
     */
    public function setInitialPoint($initialPoint)
    {
        $this->_initialPoint = $initialPoint;
    }

    /**
     * @return mixed
     */
    public function getEvolutionPoint()
    {
        return $this->_evolutionPoint;
    }

    /**
     * @param mixed $evolutionPoint
     */
    public function setEvolutionPoint($evolutionPoint)
    {
        $this->_evolutionPoint = $evolutionPoint;
    }

    /**
     * @return mixed
     */
    public function getCalculatedPoint()
    {
        return $this->_calculatedPoint;
    }

    /**
     * @param mixed $calculatedPoint
     */
    public function setCalculatedPoint($calculatedPoint)
    {
        $this->_calculatedPoint = $calculatedPoint;
    }

    public function calcCalculatedPoint(int $level)
    {
        $result = $this->getInitialPoint();
        for ($i = 1; $i <= $level; $i++)
            $result += $result * (((100 * $level) + $this->getEvolutionPoint()) / 100);
        return ($result);
    }

    public function addCalculatedPoint(int $result)
    {
        $this->_calculatedPoint += $result;
    }

    /**
     * @return bool
     */
    public function isActivatePoint(): bool
    {
        return $this->_Activate_point;
    }

    /**
     * @param bool $Activate_point
     */
    public function setActivatePoint(bool $Activate_point)
    {
        $this->_Activate_point = $Activate_point;
    }
}