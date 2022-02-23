<?php

namespace Jortiz3109\Solid\Tests\DIP;

use Jortiz3109\Solid\DIP\SOLIDWay\Checkout;
use Jortiz3109\Solid\DIP\SOLIDWay\Interfaces\TransactionInterface;
use Jortiz3109\Solid\DIP\SOLIDWay\Transactions\CashTransaction;
use Jortiz3109\Solid\DIP\SOLIDWay\Transactions\CreditTransaction;
use Jortiz3109\Solid\DIP\SOLIDWay\Transactions\DebitTransaction;
use PHPUnit\Framework\TestCase;

class SOLIDWayTest extends TestCase
{
    /**
     * @return void
     * @dataProvider transactionProvider
     */
    public function test_it_can_process_a_transaction(TransactionInterface $transaction, string $expected): void
    {

        $this->assertEquals($expected, (new Checkout())->pay($transaction));
    }

    public function transactionProvider(): array
    {
        return [
            'debit' => ['transaction' => new DebitTransaction(), 'expected' => 'Debit transaction processed'],
            'credit' => ['transaction' => new CreditTransaction(), 'expected' => 'Credit transaction processed'],
            'cash' => ['transaction' => new CashTransaction(), 'expected' => 'Cash transaction processed'],
        ];
    }
}