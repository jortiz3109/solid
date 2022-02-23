<?php

namespace Jortiz3109\Solid\Tests\SRP;

use Jortiz3109\Solid\SRP\WrongWay\Transaction;
use PHPUnit\Framework\TestCase;

class WrongWayTest extends TestCase
{
    public function test_it_exports_to_pdf(): void
    {
        $transaction = new Transaction(reference:'Test', amount: 2000, properties: ['ip' => '127.0.0.1']);

        $response = $transaction->exportPDF();

        $this->assertStringContainsString('Transaction exported to PDF format', $response);
        $this->assertStringContainsString('Reference: Test', $response);
        $this->assertStringContainsString('Amount: 2000', $response);
    }

    public function test_it_exports_to_html(): void
    {
        $transaction = new Transaction(reference:'Test', amount: 2000, properties: ['ip' => '127.0.0.1']);

        $response = $transaction->exportHTML();

        $this->assertStringContainsString('<h1>Transaction exported to HTML format</h1>', $response);
        $this->assertStringContainsString('<p>Reference: Test</p>', $response);
        $this->assertStringContainsString('<p>Amount: 2000</p>', $response);
    }
}