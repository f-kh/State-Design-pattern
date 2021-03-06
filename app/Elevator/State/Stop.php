<?php

namespace App\Elevator\State;

class Stop extends ElevatorState
{
    public function open()
    {
        return new Open();
    }

    public function close()
    {
        return new Close();
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
