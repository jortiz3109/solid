<?php

namespace ISP\WrongWay;

use Exception;
use Jortiz3109\Solid\ISP\WrongWay\AirPlane;
use Jortiz3109\Solid\ISP\WrongWay\Car;
use Jortiz3109\Solid\ISP\WrongWay\Interfaces\VehicleInterface;
use Jortiz3109\Solid\ISP\WrongWay\Ship;
use PHPUnit\Framework\TestCase;

class VehicleTest extends TestCase
{
    /**
     * @param VehicleInterface $vehicle
     * @return void
     * @dataProvider vehiclesProvider
     */
    public function test_a_vehicle_can_accelerate(VehicleInterface $vehicle): void
    {
        $this->assertEquals('Im accelerating', $vehicle->accelerate());
    }

    /**
     * @param VehicleInterface $vehicle
     * @return void
     * @dataProvider vehiclesProvider
     */
    public function test_a_vehicle_can_fly(VehicleInterface $vehicle): void
    {
        if (!$vehicle->canFly()) {
            $this->expectException(Exception::class);
        }

        $this->assertEquals('Im flying', $vehicle->fly());
    }

    /**
     * @param VehicleInterface $vehicle
     * @return void
     * @dataProvider vehiclesProvider
     */
    public function test_a_vehicle_can_float(VehicleInterface $vehicle): void
    {
        if (!$vehicle->canFloat()) {
            $this->expectException(Exception::class);
        }

        $this->assertEquals('Im floating', $vehicle->float());
    }

    public function vehiclesProvider(): array
    {
        return [
            'Car' => ['vehicle' => new Car()],
            'Ship' => ['vehicle' => new Ship()],
            'AirPlane' => ['vehicle' => new AirPlane()],
        ];
    }
}