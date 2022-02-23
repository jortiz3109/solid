<?php

namespace Jortiz3109\Solid\ISP\SOLIDWay;

abstract class Vehicle implements Interfaces\VehicleInterface
{

    public function accelerate(): string
    {
        return 'Im accelerating';
    }
}