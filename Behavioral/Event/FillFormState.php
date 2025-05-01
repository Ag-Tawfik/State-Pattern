<?php

namespace Behavioral\Event;

class FillFormState extends State
{
    protected readonly StateEnum $state;

    public function __construct()
    {
        $this->state = StateEnum::FILLFORM;
    }

    public function proceed(): void
    {
        $physicalEvent = $this->getContext()->getParticipant()->isEventPhysical();
        
        $this->transitionTo(
            $physicalEvent 
                ? new AdminAcceptedState()
                : new DoneState()
        );
    }
}
