<?php

require __DIR__ . '/vendor/autoload.php';

$motorVehicleFactory = new \Acme\MotorVehicleFactory();

$peugeot = $motorVehicleFactory->createPeugeot(
    \Acme\CarPart\FuelTypeInterface::TYPE_DIESEL,
    \Acme\CarPart\TrafficDirectionInterface::DIRECTION_RIGHT
);

var_dump($peugeot);

echo '<hr>';

$ferrari = $motorVehicleFactory->createFerrari(
    \Acme\CarPart\FuelTypeInterface::TYPE_PETROL,
    \Acme\CarPart\TrafficDirectionInterface::DIRECTION_LEFT
);

var_dump($ferrari);
