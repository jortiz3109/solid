<?php

namespace Jortiz3109\Solid\LSP;

class Parser
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function output(): Result
    {
        $result = '';

        foreach($this->data as $row)
        {
            $result .= $this->line($row);
        }

        return new Result($result);
    }

    public function line(array $row): string
    {
        return implode(' ', $row) . PHP_EOL;
    }
}
