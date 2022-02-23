<?php

namespace Jortiz3109\Solid\OCP\WrongWay;

class Circle
{
    protected float $radio = 0;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    public function getRadio(): float
    {
        return $this->radio;
    }
}
