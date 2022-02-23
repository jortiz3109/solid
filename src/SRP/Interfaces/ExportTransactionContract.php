<?php

namespace Jortiz3109\Solid\SRP\Interfaces;

use Jortiz3109\Solid\SRP\SOLIDWay\Transaction;

interface ExportTransactionContract
{
    public function export(Transaction $transaction): string;
}