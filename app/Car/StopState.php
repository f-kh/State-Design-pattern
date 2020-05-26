<?php

namespace App\Car;

class StopState implements StateInterface
{
    public function drive()
    {
        echo "The car is driving now.\n";
        return new DriveState();
    }

    public function stop()
    {
        echo "You are not allow to stop.\n";
        exit();
    }
}
