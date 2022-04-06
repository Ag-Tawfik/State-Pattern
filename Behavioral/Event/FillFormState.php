<?php

namespace Behavioral\Event;


class FillFormState extends State
{
    protected string $state = StateEnum::FILLFORM_STATE;

    private bool $phisicalEvent;

    public function proceed()
    {
        // Fill form logic

        $this->phisicalEvent = $this->getContext()->getParticipant()->isEventPhisical();

        if ($this->phisicalEvent) {
            $this->transitionTo(new AdminAccptedState());
        } else {
            $this->transitionTo(new DoneState());
        }
    }
}
