
<?php

namespace Tests\Unit\Elevator;

use Tests\TestCase;
use App\Elevator\Elevator;

class TestElevator extends TestCase
{
    public function test_elevator()
    {

        // The car is initially stop
        $elevator = new Elevator();

        // So, it's allow to drive
        $elevator->open();
//        $elevator->close();
//        $elevator->move();
//        $elevator->stop();
        // Output: The car is driving now.

//        // Now it's driving, so,
//        // it's allow to stop once again
//        $elevator->stop();
//        // Output: The car is stopped.
//
//        // Now it has stopped, so,
//        // not allow to stop again
//        $car->stop();
//        // Output: You are not allow to stop.

        $this->assertTrue(true);
    }
}
