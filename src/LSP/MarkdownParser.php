<?php

namespace Jortiz3109\Solid\LSP;

class MarkdownParser extends Parser
{
    public function line(array $row): string
    {
        return '|' . implode('|', $row) . '|' . PHP_EOL;
    }
}
