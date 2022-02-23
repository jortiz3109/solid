<?php

namespace Jortiz3109\Solid\ISP\WrongWay;

use Exception;

class Car implements Interfaces\VehicleInterface
{

    /**
     * @throws Exception
     */
    public function fly(): string
    {
        throw new Exception('I cant fly');
    }

    public function accelerate(): string
    {
        return 'Im accelerating';
    }

    public function canFly(): bool
    {
        return false;
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
        throw new Exception('I cant Float');
    }
}