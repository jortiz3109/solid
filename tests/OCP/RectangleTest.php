<?php

namespace OCP;

use Jortiz3109\Solid\OCP\Circle;
use Jortiz3109\Solid\OCP\Rectangle;
use Jortiz3109\Solid\OCP\WrongWay\AreaCalculator;
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

    /**
     * WRONG WAY BEHAVIOR
     */

    /** @test */
    public function itComputesRectangleArea1()
    {
        $rectangle = new \Jortiz3109\Solid\OCP\WrongWay\Rectangle(5, 4);

        $this->assertSame(20.0, AreaCalculator::compute($rectangle));
    }

    /** @test */
    public function itComputesCircleArea1()
    {
        $circle = new \Jortiz3109\Solid\OCP\WrongWay\Circle(5);

        $this->assertSame(5 * 5  * pi(), AreaCalculator::compute($circle));
    }
}
