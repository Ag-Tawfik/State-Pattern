<?php

namespace Behavioral\Event;


class AppliedState extends State

{
    protected string  $state = StateEnum::APPLIED_STATE;

    private bool $phisicalEvent;

    public function proceed()
    {
        // Apply logic

        $this->phisicalEvent = $this->getContext()->getParticipant()->isEventPhisical();

        if ($this->phisicalEvent) {
            $this->transitionTo(new FillFormState());
        } else {
            $this->transitionTo(new PaidState());
        }
    }
}
