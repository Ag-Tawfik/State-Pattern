<?php

namespace Behavioral\Event;


class DoneState extends State
{
    protected string $state = StateEnum::DONE_STATE;

    public function proceed()
    {
        // Do Nothing
    }

    protected function transitionTo(State $state)
    {
        // Do Noting
    }
}
