<?php

namespace Jortiz3109\Solid\OCP\WrongWay;

class AreaCalculator
{
    public static function compute($figure): float
    {
        if ($figure instanceof Rectangle) {
            return $figure->getLength() * $figure->getWidth();
        } elseif ($figure instanceof Circle) {
            return pi() * pow($figure->getRadio(), 2);
        }

        return 0;
    }
}