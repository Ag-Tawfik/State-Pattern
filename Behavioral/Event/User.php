<?php

namespace Behavioral\Event;


class User
{
    public function __construct(
        private readonly string $name,
        private readonly bool $physicalEvent,
        private readonly bool $adminAccepted
    ) {}

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isEventPhysical(): bool
    {
        return $this->physicalEvent;
    }

    public function isAdminAccepted(): bool
    {
        return $this->adminAccepted;
    }
}
