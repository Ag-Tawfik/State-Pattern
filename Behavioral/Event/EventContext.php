<?php

namespace Behavioral\Event;

class EventContext
{
    private array $eventLogs = [];

    public function __construct(
        private readonly User $participant,
        private State $state = new AppliedState()
    ) {}

    /**
     * @return User
     */
    public function getParticipant(): User
    {
        return $this->participant;
    }

    public function eventProceed(): void
    {
        $this->state->setEventContext($this);
        $this->state->proceed();
    }

    /**
     * @return array
     */
    public function getEventLogs(): array
    {
        return $this->eventLogs;
    }

    public function addToEventLogs(string $log): void
    {
        $this->eventLogs[] = $log;
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->state = $state;
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }
}
