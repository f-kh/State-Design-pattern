<?php

namespace App\Elevator\State;

use App\Elevator\ElevatorStateInterface;
use Exception;

class ElevatorState implements ElevatorStateInterface
{
    public function close()
    {
        echo "This is close state.";
    }

    public function move()
    {
        echo "This is move state.";
    }

    public function open()
    {
        echo "This is open state.";
    }

    public function stop()
    {
        echo "This is stop state.";
    }
}
