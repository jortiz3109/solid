<?php

namespace Jortiz3109\Solid\LSP;

class MarkdownParser extends Parser
{
    public function line(array $row)
    {
        return '|' . implode('|', $row) . '|' . PHP_EOL;
    }
}
