<?php

namespace Jortiz3109\Solid\ISP\SOLIDWay;

class AirPlane extends Vehicle implements Interfaces\AirVehicleInterface
{
    public function fly(): string
    {
        return 'Im flying';
    }
}