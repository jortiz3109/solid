<?php

namespace Jortiz3109\Solid\Tests\SRP;

use Jortiz3109\Solid\SRP\Exports\HTML;
use Jortiz3109\Solid\SRP\Exports\PDF;
use Jortiz3109\Solid\SRP\SOLIDWay\Transaction;
use PHPUnit\Framework\TestCase;

class SOLIDWayTest extends TestCase
{
    public function test_it_exports_to_pdf(): void
    {
        $transaction = new Transaction(reference:'Test', amount: 2000, properties: ['ip' => '127.0.0.1']);

        $response = (new PDF())->export($transaction);

        $this->assertStringContainsString('Transaction exported to PDF format', $response);
        $this->assertStringContainsString('Reference: Test', $response);
        $this->assertStringContainsString('Amount: 2000', $response);
    }

    public function test_it_exports_to_html(): void
    {
        $transaction = new Transaction(reference:'Test', amount: 2000, properties: ['ip' => '127.0.0.1']);

        $response = (new HTML())->export($transaction);

        $this->assertStringContainsString('<h1>Transaction exported to HTML format</h1>', $response);
        $this->assertStringContainsString('<p>Reference: Test</p>', $response);
        $this->assertStringContainsString('<p>Amount: 2000</p>', $response);
    }
}