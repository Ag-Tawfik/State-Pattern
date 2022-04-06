<?php

namespace Tests;

use Behavioral\Event\User;
use Behavioral\Event\StateEnum;
use Behavioral\Event\EventContext;
use PHPUnit\Framework\TestCase;

class StateEventTest extends TestCase
{

    public function testFlowWhenEventIsPhisicalWithAdminAcceptance()
    {
        $user = new User('Ramadan', true, true);
        $event = new EventContext($user);
        $event->eventProceed(); // APPLIED
        $event->eventProceed(); // FILLFORM
        $event->eventProceed(); // ADMINACCEPTED
        $event->eventProceed(); // PAID

        self::assertEquals(StateEnum::DONE_STATE, $event->getState()->getState());
    }

    public function testFlowWhenEventIsPhisicalWithAdminRejection()
    {
        $user = new User('Ramadan', true, false);
        $event = new EventContext($user);
        $event->eventProceed(); // APPLIED
        $event->eventProceed(); // FILLFORM
        $event->eventProceed(); // ADMINREJECTED

        self::assertEquals(StateEnum::REJECTED_STATE, $event->getState()->getState());
    }

    public function testFlowWhenEventIsOnline()
    {
        $user = new User('Ramadan', false, false);
        $event = new EventContext($user);
        $event->eventProceed(); // APPLIED
        $event->eventProceed(); // PAID
        $event->eventProceed(); // FILLFORM

        self::assertEquals(StateEnum::DONE_STATE, $event->getState()->getState());
    }
}
