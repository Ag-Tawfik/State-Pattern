<?php

namespace Behavioral\Event;

class DoneState extends State
{
    protected readonly string $state;

    public function __construct()
    {
        $this->state = StateEnum::DONE->value;
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
