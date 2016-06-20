<?php

namespace Acme;

/**
 * Interface ManufacturerInterface
 * @package Acme
 */
interface ManufacturerInterface
{
    /**
     * @param $manufacturer
     * @return mixed
     */
    function setManufacturer($manufacturer);

    /**
     * @return mixed
     */
    function getManufacturer();
}
