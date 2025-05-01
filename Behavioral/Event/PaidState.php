<?php

namespace Behavioral\Event;

class PaidState extends State
{
    protected readonly string $state;

    public function __construct()
    {
        $this->state = StateEnum::PAID->value;
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
