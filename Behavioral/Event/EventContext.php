<?php

namespace Behavioral\Event;


class EventContext
{
    /**
     * @var User
     */
    private User $participant;

    /**
     * @var State
     */
    private State $state;

    /**
     * @var array
     */
    private array $eventLogs;

    public function __construct(User $participant)
    {
        $this->participant = $participant;
        $this->state = new AppliedState();
    }

    /**
     * @return User
     */
    public function getParticipant(): User
    {
        return $this->participant;
    }


    public function eventProceed()
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

    public function addToEventLogs(string $log)
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
