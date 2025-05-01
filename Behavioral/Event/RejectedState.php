<?php

namespace Behavioral\Event;

class RejectedState extends State
{
    protected readonly StateEnum $state;

    public function __construct()
    {
        $this->state = StateEnum::REJECTED;
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