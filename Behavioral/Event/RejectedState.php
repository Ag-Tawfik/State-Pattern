<?php

namespace Behavioral\Event;


class RejectedState extends State
{
    protected string $state = StateEnum::REJECTED_STATE;

    public function proceed()
    {
        // Do Nothing
    }

    protected function transitionTo(State $state)
    {
        // Do Noting
    }
}