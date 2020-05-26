<?php

namespace App\Car;

class DriveState implements StateInterface
{
    public function drive()
    {
        echo "You are not allow to drive.\n";
        exit();
    }

    public function stop()
    {
        echo "The car has stopped.\n";
        return new StopState();
    }
}
