<?php

namespace Jortiz3109\Solid\DIP\SOLIDWay\Transactions;

class CreditTransaction implements \Jortiz3109\Solid\DIP\SOLIDWay\Interfaces\TransactionInterface
{

    public function process(): string
    {
        return 'Credit transaction processed';
    }
}