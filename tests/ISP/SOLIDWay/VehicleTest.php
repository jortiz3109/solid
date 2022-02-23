<?php

namespace ISP\SOLIDWay;

use Jortiz3109\Solid\ISP\SOLIDWay\AirPlane;
use Jortiz3109\Solid\ISP\SOLIDWay\Car;
use Jortiz3109\Solid\ISP\SOLIDWay\Interfaces\AirVehicleInterface;
use Jortiz3109\Solid\ISP\SOLIDWay\Interfaces\VehicleInterface;
use Jortiz3109\Solid\ISP\SOLIDWay\Interfaces\WaterVehicleInterface;
use Jortiz3109\Solid\ISP\SOLIDWay\Ship;
use PHPUnit\Framework\TestCase;

class VehicleTest extends TestCase
{
    /**
     * @return void
     * @dataProvider AirVehiclesProvider
     */
    public function test_a_vehicle_can_fly(AirVehicleInterface $vehicle): void
    {
        $this->assertEquals('Im flying', $vehicle->fly());
    }

    /**
     * @return void
     * @dataProvider vehiclesProvider
     */
    public function test_a_vehicle_can_accelerate(VehicleInterface $vehicle): void
    {
        $this->assertEquals('Im accelerating', $vehicle->accelerate());
    }

    /**
     * @return void
     * @dataProvider WaterVehiclesProvider
     */
    public function test_a_vehicle_can_float(WaterVehicleInterface $vehicle): void
    {
        $this->assertEquals('Im floating', $vehicle->float());
    }

    public function WaterVehiclesProvider(): array
    {
        return [
            'Ship' => ['vehicle' => new Ship()],
        ];
    }

    public function AirVehiclesProvider(): array
    {
        return [
            'AirPlane' => ['vehicle' => new AirPlane()] ,
        ];
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