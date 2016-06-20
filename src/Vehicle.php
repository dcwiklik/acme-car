<?php

namespace Acme;

use Acme\CarPart\Dashboard;
use Acme\CarPart\Engine;
use Acme\CarPart\OnBoardComputer;

/**
 * Class Vehicle
 * @package Acme
 */
abstract class Vehicle implements ProductionDateInterface, ManufacturerInterface
{
    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var string
     */
    private $VIN;

    /**
     * @var \DateTime
     */
    private $productionDate;

    /**
     * @var Engine
     */
    protected $engine;

    /**
     * @var Dashboard
     */
    protected $dashboard;

    /**
     * @var OnBoardComputer
     */
    protected $onBoardComputer;

    /**
     * @param $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param $VIN
     */
    public function setVIN($VIN)
    {
        $this->VIN = $VIN;
    }

    /**
     * @param \DateTime $productionDate
     */
    public function setProductionDate(\DateTime $productionDate)
    {
        $this->productionDate = $productionDate;
    }

    /**
     * @return \DateTime
     */
    public function getProductionDate()
    {
        return $this->productionDate;
    }

}
