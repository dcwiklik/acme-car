<?php

namespace Acme\CarPart;

/**
 * Class Dashboard
 * @package Acme\CarPart
 */
class Dashboard extends PartAbstract implements TrafficDirectionInterface
{
    /**
     * @var string
     */
    private $trafficDirection;

    /**
     * Dashboard constructor.
     * @param $trafficDirection
     */
    public function __construct($trafficDirection)
    {
        parent::__construct();
        $this->setTrafficDirection($trafficDirection);
    }

    /**
     * @param $trafficDirection
     */
    public function setTrafficDirection($trafficDirection)
    {
        $this->trafficDirection = $trafficDirection;
    }

    /**
     * @return string
     */
    public function getTrafficDirection()
    {
        return $this->trafficDirection;
    }
}
