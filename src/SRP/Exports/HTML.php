<?php

namespace Jortiz3109\Solid\SRP\Exports;

use Jortiz3109\Solid\SRP\Interfaces\ExportTransactionContract;
use Jortiz3109\Solid\SRP\SOLIDWay\Transaction;

class HTML implements ExportTransactionContract
{

    public function export(Transaction $transaction): string
    {
        return  '<h1>Transaction exported to HTML format</h1>' .
                '<p>Reference: ' . $transaction->getReference() . '</p>' .
                '<p>Amount: ' . $transaction->getAmount() . '</p>' .
                '<p>Properties: ' . implode(', ', $transaction->getProperties()) . '</p>';
    }
}