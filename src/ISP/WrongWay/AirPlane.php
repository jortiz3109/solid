<?php

namespace Jortiz3109\Solid\ISP\WrongWay;

use Exception;

class AirPlane implements Interfaces\VehicleInterface
{

    public function fly(): string
    {
        return 'Im flying';
    }

    public function accelerate(): string
    {
        return 'Im accelerating';
    }

    public function canFly(): bool
    {
        return true;
    }

    public function canFloat(): bool
    {
        return false;
    }

    /**
     * @throws Exception
     */
    public function float(): string
    {
        throw new Exception('I cant float');
    }
}