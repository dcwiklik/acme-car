<?php

namespace Acme;

use Acme\CarPart\Dashboard;
use Acme\CarPart\Engine;
use Acme\CarPart\OnBoardComputer;

/**
 * Class Car
 * @package Acme
 */
class Car extends Vehicle
{
    /**
     * Car constructor.
     * @param $manufacturer
     * @param $fuelType
     * @param $trafficDirection
     */
    public function __construct($manufacturer, $fuelType, $trafficDirection)
    {
        $this->setManufacturer($manufacturer);
        $this->setVIN(uniqid());
        $this->setProductionDate(new \DateTime());

        $this->engine = new Engine($fuelType);
        $this->dashboard = new Dashboard($trafficDirection);
        $this->onBoardComputer = new OnBoardComputer();
    }
}
