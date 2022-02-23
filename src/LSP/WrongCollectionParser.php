<?php

namespace Jortiz3109\Solid\LSP;

class WrongCollectionParser extends Parser
{
    public function line(array $row): object
    {
        return (object) $row;
    }
}
