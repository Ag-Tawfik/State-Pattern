<?php

namespace Behavioral\Event;

class DoneState extends State
{
    protected readonly StateEnum $state;

    public function __construct()
    {
        $this->state = StateEnum::DONE;
    }

    public function proceed(): void
    {
        // Final state - no transitions
    }

    protected function transitionTo(State $state): void
    {
        // Final state - no transitions
    }
}
