<?php

namespace Tests\Unit\Car;

use App\Car\Car;
use App\Car\StopState;
use Tests\TestCase;

class TestCar extends TestCase
{
    public function test_car()
    {
        // The car is initially stop
        $car = new Car(new StopState());

        // So, it's allow to drive
        $car->drive();
        // Output: The car is driving now.

        // Now it's driving, so,
        // it's allow to stop once again
        $car->stop();
        // Output: The car is stopped.

        // Now it has stopped, so,
        // not allow to stop again
        $car->stop();
        // Output: You are not allow to stop.
    }

}
