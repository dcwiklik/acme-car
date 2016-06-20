<?php

namespace Acme\CarPart;

interface FuelTypeInterface
{
    CONST
        TYPE_PETROL = 'PETROL',
        TYPE_DIESEL = 'DIESEL',
        TYPE_ELECTRIC = 'ELECTRIC';

    function setFuelType($fuelType);

    function getFuelType();
}
