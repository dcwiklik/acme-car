<?php

namespace Acme\CarPart;

/**
 * Interface IdentificationNumberInterface
 * @package Acme\CarPart
 */
interface IdentificationNumberInterface
{
    /**
     * @param $identificationNumber
     * @return mixed
     */
    function setIdentificationNumber($identificationNumber);

    /**
     * @return mixed
     */
    function getIdentificationNumber();
}
