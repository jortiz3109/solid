<?php

namespace Jortiz3109\Solid\ISP\WrongWay\Interfaces;

interface VehicleInterface
{
    public function canFly(): bool;
    public function fly(): string;
    public function canFloat(): bool;
    public function float(): string;
    public function accelerate(): string;
}