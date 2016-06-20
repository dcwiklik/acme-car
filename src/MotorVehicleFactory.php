<?php

namespace Acme;

class MotorVehicleFactory
{
    /**
     * Create Peugeot Car
     *
     * @param $fuelType
     * @param $trafficDirection
     * @return \Acme\Car
     */
    public function createPeugeot($fuelType, $trafficDirection)
    {
        return new \Acme\Car('Peugeot', $fuelType, $trafficDirection);
    }

    /**
     * Create Ferrari Car
     *
     * @param $fuelType
     * @param $trafficDirection
     * @return \Acme\Car
     */
    public function createFerrari($fuelType, $trafficDirection)
    {
        return new \Acme\Car('Ferrari', $fuelType, $trafficDirection);
    }
}
