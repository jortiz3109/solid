<?php

namespace Jortiz3109\Solid\LSP;

class CSVParser extends Parser
{
    public function line(array $row)
    {
        return implode(';', $row) . PHP_EOL;
    }
}
