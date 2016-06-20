<?php

namespace Acme\CarPart;

interface EngineInterface extends FuelTypeInterface
{
    /**
     * @return mixed
     */
    public function run();

    /**
     * @return mixed
     */
    public function stop();

    /**
     * @return mixed
     */
    public function isRunning();
}
