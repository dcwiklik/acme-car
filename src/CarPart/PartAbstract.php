<?php

namespace Acme\CarPart;

/**
 * Class PartAbstract
 * @package Acme\Part
 */
abstract class PartAbstract implements IdentificationNumberInterface
{
    /**
     * @var string
     */
    private $identificationNumber;

    /**
     * PartAbstract constructor.
     */
    public function __construct()
    {
        $this->setIdentificationNumber(uniqid());
    }

    /**
     * @param $identificationNumber
     */
    public function setIdentificationNumber($identificationNumber)
    {
        $this->identificationNumber = $identificationNumber;
    }

    /**
     * @return string
     */
    public function getIdentificationNumber()
    {
        return $this->identificationNumber;
    }
}
