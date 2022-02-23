<?php

namespace Jortiz3109\Solid\OCP\WrongWay;

class Rectangle
{
    protected float $length = 0;
    protected float $width = 0;

    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }
}
