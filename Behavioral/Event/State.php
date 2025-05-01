<?php

namespace Behavioral\Event;

abstract class State
{
    protected readonly string $state;
    private ?EventContext $context = null;

    public function setEventContext(EventContext $context): void
    {
        $this->context = $context;
        $this->addStateToLog();
    }

    abstract public function proceed(): void;

    protected function transitionTo(State $state): void
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
    protected function getContext(): EventContext
    {
        if ($this->context === null) {
            throw new \RuntimeException('Context not set');
        }
        return $this->context;
    }

    private function addStateToLog(): void
    {
        $this->getContext()->addToEventLogs($this->state);
    }
}
