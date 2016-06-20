<?php

namespace Acme;

/**
 * Interface ProductionDateInterface
 * @package Acme
 */
interface ProductionDateInterface
{
    /**
     * @param \DateTime $productionDate
     * @return mixed
     */
    function setProductionDate(\DateTime $productionDate);

    /**
     * @return mixed
     */
    function getProductionDate();
}
