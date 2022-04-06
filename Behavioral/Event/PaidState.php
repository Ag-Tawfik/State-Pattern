<?php

namespace Behavioral\Event;

class PaidState extends State
{
    protected string $state = StateEnum::PAID_STATE;

    private bool $phisicalEvent;

    public function proceed()
    {
        // Pay logic

        $this->phisicalEvent = $this->getContext()->getParticipant()->isEventPhisical();

        if ($this->phisicalEvent) {
            $this->transitionTo(new DoneState());
        } else {
            $this->transitionTo(new FillFormState());
        }
    }
}
