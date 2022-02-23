<?php

namespace Jortiz3109\Solid\Tests\OCP;

use Jortiz3109\Solid\OCP\Circle;
use Jortiz3109\Solid\OCP\Rectangle;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    public function test_it_computes_rectangle_area(): void
    {
        $rectangle = new Rectangle(5, 4);

        $this->assertSame(20.0, $rectangle->computeArea());
    }

    public function test_it_computes_circle_area(): void
    {
        $circle = new Circle(5);

        $this->assertSame(5 * 5  * pi(), $circle->computeArea());
    }
}
