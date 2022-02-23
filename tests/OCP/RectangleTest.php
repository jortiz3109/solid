<?php

namespace OCP;

use Jortiz3109\Solid\OCP\Circle;
use Jortiz3109\Solid\OCP\Rectangle;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    /** @test */
    public function itComputesRectangleArea()
    {
        $rectangle = new Rectangle(5, 4);

        $this->assertSame(20.0, $rectangle->compute());
    }

    /** @test */
    public function itComputesCircleArea()
    {
        $circle = new Circle(5);

        $this->assertSame(5 * 5  * pi(), $circle->compute());
    }
}
