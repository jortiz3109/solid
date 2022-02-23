<?php

namespace Jortiz3109\Solid\DIP\SOLIDWay;

use Jortiz3109\Solid\DIP\SOLIDWay\Interfaces\TransactionInterface;

class Checkout
{
    public function pay(TransactionInterface $transaction): string
    {
        return $transaction->process();
    }
}