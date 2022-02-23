<?php

namespace Jortiz3109\Solid\DIP\SOLIDWay\Interfaces;

interface TransactionInterface
{
    public function process(): string;
}