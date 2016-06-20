<?php

namespace Acme\CarPart;

/**
 * Class EngineAbstract
 * @package Acme\CarPart
 */
class EngineAbstract extends PartAbstract implements EngineInterface
{
    /**
     * @var
     */
    private $fuelType;

    /**
     * EngineAbstract constructor.
     * @param $fuelType
     */
    public function __construct($fuelType)
    {
        parent::__construct();
        $this->setFuelType($fuelType);
    }

    /**
     * Run engine
     */
    public function run() {}

    /**
     * Stop engine
     */
    public function stop() {}

    /**
     * Is engine running
     */
    public function isRunning() {}

    /**
     * @param $fuelType
     */
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
    }

    /**
     * @return mixed
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }
}
