<?php

namespace Jortiz3109\Solid\LSP;

class CSVParser extends Parser
{
    public function line(array $row): string
    {
        return implode(';', $row) . PHP_EOL;
    }
}
