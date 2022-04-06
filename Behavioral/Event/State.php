<?php

namespace Behavioral\Event;


abstract class State
{
    protected string $state;

    private EventContext $context;

    public function setEventContext(EventContext $context)
    {
        $this->context = $context;
        $this->addStateToLog();
    }

    abstract public function proceed();

    protected function transitionTo(State $state)
    {
        $this->getContext()->setState($state);
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return EventContext
     */
    public function getContext(): EventContext
    {
        return $this->context;
    }

    private function addStateToLog()
    {
        $this->getContext()->addToEventLogs($this->state);
    }
}
