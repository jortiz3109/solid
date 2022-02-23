<?php

namespace Jortiz3109\Solid\Tests\DIP;

use Jortiz3109\Solid\DIP\WrongWay\Checkout;
use Jortiz3109\Solid\DIP\WrongWay\DebitTransaction;
use PHPUnit\Framework\TestCase;

class WrongWayTest extends TestCase
{
    public function test_it_can_process_debit_transaction(): void
    {
        $transaction = new DebitTransaction();

        $this->assertEquals('Debit transaction processed', (new Checkout())->pay($transaction));
    }
}