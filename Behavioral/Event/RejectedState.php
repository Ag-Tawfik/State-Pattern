<?php

namespace Behavioral\Event;

class RejectedState extends State
{
    protected readonly string $state;

    public function __construct()
    {
        $this->state = StateEnum::REJECTED->value;
    }

    public function proceed(): void
    {
        // Rejected state - no transitions
    }

    protected function transitionTo(State $state): void
    {
        // Rejected state - no transitions
    }
}