<?php

namespace Jortiz3109\Solid\SRP\Exports;

use Jortiz3109\Solid\SRP\Interfaces\ExportTransactionContract;
use Jortiz3109\Solid\SRP\SOLIDWay\Transaction;

class PDF implements ExportTransactionContract
{

    public function export(Transaction $transaction): string
    {
        return 'Transaction exported to PDF format' . PHP_EOL .
                'Reference: ' . $transaction->getReference() . PHP_EOL .
                'Amount: ' . $transaction->getAmount() . PHP_EOL .
                'Properties: ' . implode(', ', $transaction->getProperties()) . PHP_EOL;
    }
}