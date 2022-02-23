<?php

namespace Jortiz3109\Solid\DIP\WrongWay;

class Checkout
{
    public function pay(DebitTransaction $transaction): string
    {
        return $transaction->process();
    }
}