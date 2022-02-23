<?php

namespace Jortiz3109\Solid\OCP;

abstract class Figure
{
    protected ?float $area = null;

    public function compute(): float
    {
        if (!$this->area) {
            $this->area = $this->computeArea();
        }

        return $this->area;
    }

    abstract protected function computeArea(): float;
}
