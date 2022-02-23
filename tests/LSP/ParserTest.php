<?php

namespace Jortiz3109\Solid\Tests\LSP;

use Jortiz3109\Solid\LSP\CSVParser;
use Jortiz3109\Solid\LSP\MarkdownParser;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    /** @test */
    public function itParsesAsCsv()
    {
        // subtype CSV
        $csv = new CSVParser([
            [1, 'Steave', 'Developer'],
            [2, 'Andreas', 'Tester'],
        ]);

        $output = '1;Steave;Developer' . PHP_EOL . '2;Andreas;Tester' . PHP_EOL;

        $this->assertSame($output, $csv->output()->getContent());
    }

    /** @test */
    public function itParsesAsMarkdown()
    {
        // subtype Markdown
        $markdown = new MarkdownParser([
            [1, 'Steave', 'Developer'],
            [2, 'Andreas', 'Tester'],
        ]);

        $output = '|1|Steave|Developer|' . PHP_EOL . '|2|Andreas|Tester|' . PHP_EOL;

        $this->assertSame($output, $markdown->output()->getContent());
    }
}