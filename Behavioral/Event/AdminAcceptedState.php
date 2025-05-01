<?php

namespace Behavioral\Event;

class AdminAcceptedState extends State
{
    protected readonly StateEnum $state;

    public function __construct()
    {
        $this->state = StateEnum::ADMINACCEPTED;
    }

    public function proceed(): void
    {
        $adminAccepted = $this->getContext()->getParticipant()->isAdminAccepted();
        
        $this->transitionTo(
            $adminAccepted 
                ? new PaidState()
                : new RejectedState()
        );
    }
} 