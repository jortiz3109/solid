<?php

namespace Jortiz3109\Solid\ISP\WrongWay;

use Exception;

class Ship implements Interfaces\VehicleInterface
{

    public function canFly(): bool
    {
        return false;
    }

    /**
     * @throws Exception
     */
    public function fly(): string
    {
        throw new Exception('I cant fly');
    }

    public function canFloat(): bool
    {
        return true;
    }

    public function float(): string
    {
        return 'Im floating';
    }

    public function accelerate(): string
    {
        return 'Im accelerating';
    }
}