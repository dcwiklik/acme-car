<?php

namespace Acme\CarPart;

/**
 * Interface TrafficDirectionInterface
 * @package Acme\Part
 */
interface TrafficDirectionInterface
{
    const
        DIRECTION_RIGHT = 'RIGHT',
        DIRECTION_LEFT = 'LEFT';
    
    /**
     * @param $trafficDirection
     * @return mixed
     */
    function setTrafficDirection($trafficDirection);

    /**
     * @return mixed
     */
    function getTrafficDirection();
}
