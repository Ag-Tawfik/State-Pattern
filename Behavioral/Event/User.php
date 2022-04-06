<?php

namespace Behavioral\Event;


class User
{
    private string $name;
    private bool $phisicalEvent;
    private bool $adminAccepted;

    public function __construct(string $name, bool $phisicalEvent, bool $adminAccepted)
    {
        $this->name = $name;
        $this->phisicalEvent = $phisicalEvent;
        $this->adminAccepted = $adminAccepted;
    }

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
    public function isEventPhisical(): bool
    {
        return $this->phisicalEvent;
    }

    public function isAdminAccepted(): bool
    {
        return $this->adminAccepted;
    }
}
