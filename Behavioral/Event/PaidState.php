<?php

namespace Behavioral\Event;

class PaidState extends State
{
    protected readonly StateEnum $state;

    public function __construct()
    {
        $this->state = StateEnum::PAID;
    }

    public function proceed(): void
    {
        $physicalEvent = $this->getContext()->getParticipant()->isEventPhysical();
        
        $this->transitionTo(
            $physicalEvent 
                ? new DoneState()
                : new FillFormState()
        );
    }
}
