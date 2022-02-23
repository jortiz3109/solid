<?php

namespace Jortiz3109\Solid\LSP;

class WrongTabParser extends Parser
{
    public function line(array $row): string
    {
        if (!count($row)) {
            throw new \InvalidArgumentException('empty array');
        }

        return implode("\t", $row) . PHP_EOL;
    }
}