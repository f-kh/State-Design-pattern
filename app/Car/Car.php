<?php

namespace App\Car;

class Car
{
    private $state;

    public function __construct(StateInterface $state)
    {
        $this->state = $state;
    }

    public function drive()
    {
        $this->setState($this->state->drive());
    }

    public function stop()
    {
        $this->setState($this->state->stop());
    }

    private function setState(StateInterface $state)
    {
        $this->state = $state;
    }
}
