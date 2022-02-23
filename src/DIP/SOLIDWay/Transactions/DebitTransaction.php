<?php

namespace Jortiz3109\Solid\DIP\SOLIDWay\Transactions;

use Jortiz3109\Solid\DIP\SOLIDWay\Interfaces\TransactionInterface;

class DebitTransaction implements TransactionInterface
{

    public function process(): string
    {
        return 'Debit transaction processed';
    }
}