<?php

namespace OCP;

use Jortiz3109\Solid\OCP\Circle;
use Jortiz3109\Solid\OCP\Rectangle;
use Jortiz3109\Solid\OCP\WrongWay\AreaCalculator;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    public function test_it_computes_rectangle_area(): void
    {
        $rectangle = new Rectangle(5, 4);

        $this->assertSame(20.0, $rectangle->compute());
    }

    public function test_it_computes_circle_area(): void
    {
        $circle = new Circle(5);

        $this->assertSame(5 * 5  * pi(), $circle->compute());
    }

    /**
     * WRONG WAY BEHAVIOR
     */

    public function test_it_computes_rectangle_area1(): void
    {
        $rectangle = new \Jortiz3109\Solid\OCP\WrongWay\Rectangle(5, 4);

        $this->assertSame(20.0, AreaCalculator::compute($rectangle));
    }

    public function test_it_computes_circle_area1(): void
    {
        $circle = new \Jortiz3109\Solid\OCP\WrongWay\Circle(5);

        $this->assertSame(5 * 5  * pi(), AreaCalculator::compute($circle));
    }
}
