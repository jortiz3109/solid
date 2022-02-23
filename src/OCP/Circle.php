<?php

namespace Jortiz3109\Solid\OCP;

class Circle extends Figure
{
    protected float $radio = 0;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    protected function computeArea(): float
    {
        return pi() * pow($this->radio, 2);
    }
}
