<?php

namespace Behavioral\Event;


class AdminAccptedState extends State
{
    protected string $state = StateEnum::ADMINACCEPTED_STATE;

    private bool $adminAccepted;

    public function proceed()
    {
        // Admin accept logic
        
        $this->adminAccepted = $this->getContext()->getParticipant()->isAdminAccepted();

        if ($this->adminAccepted) {
            $this->transitionTo(new PaidState());
        } else {
            $this->transitionTo(new RejectedState());
        }
    }
}
