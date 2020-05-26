<?php

namespace App\Elevator\State;

class Close extends ElevatorState
{
    public function close()
    {
        return new Close();
    }

    public function open()
    {
        return new Open();
    }

    public function move()
    {
        return new Move();
    }

    public function stop()
    {
        return new Stop();
    }
}
