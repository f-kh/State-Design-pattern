<?php

namespace App\Elevator\State;

use App\Elevator\Elevator;

class index
{
    public function elevator()
    {
        // The elevator is initially stop
        $elevator = new Elevator();

        $elevator->open();
        $elevator->close();
        $elevator->move();
        $elevator->stop();
    }
}
