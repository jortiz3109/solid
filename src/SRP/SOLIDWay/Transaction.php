<?php

namespace Jortiz3109\Solid\SRP\SOLIDWay;

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

}