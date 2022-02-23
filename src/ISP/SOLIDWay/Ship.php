<?php

namespace Jortiz3109\Solid\ISP\SOLIDWay;

class Ship extends Vehicle implements Interfaces\WaterVehicleInterface
{
    public function float(): string
    {
        return 'Im floating';
    }
}