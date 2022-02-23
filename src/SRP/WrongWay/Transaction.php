<?php

namespace Jortiz3109\Solid\SRP\WrongWay;

use Exception;

class Transaction
{
    private string $reference;
    private float $amount;
    private array $properties;

    public function __construct(string $reference, float $amount, array $properties)
    {
        $this->reference = $reference;
        $this->amount = $amount;
        $this->properties = $properties;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * @throws Exception
     */
    public function export(string $format = 'pdf'): string
    {
        switch ($format) {
            case 'pdf':
                return 'Transaction exported to PDF format' . PHP_EOL .
                        'Reference: ' . $this->getReference() . PHP_EOL .
                        'Amount: ' . $this->getAmount() . PHP_EOL .
                        'Properties: ' . implode(', ', $this->getProperties()) . PHP_EOL;
            case 'html':
                return  '<h1>Transaction exported to HTML format</h1>' .
                        '<p>Reference: ' . $this->getReference() . '</p>' .
                        '<p>Amount: ' . $this->getAmount() . '</p>' .
                        '<p>Properties: ' . implode(', ', $this->getProperties()) . '</p>';
            default:
                throw new Exception('No valid format provided');
        }
    }
}