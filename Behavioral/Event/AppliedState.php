<?php

namespace Behavioral\Event;

class AppliedState extends State
{
    protected readonly string $state;

    public function __construct()
    {
        $this->state = StateEnum::APPLIED->value;
    }

    public function proceed(): void
    {
        $physicalEvent = $this->getContext()->getParticipant()->isEventPhysical();
        
        $this->transitionTo(
            $physicalEvent 
                ? new FillFormState()
                : new PaidState()
        );
    }
}
