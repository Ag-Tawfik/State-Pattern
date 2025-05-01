<?php

namespace Behavioral\Event;

enum StateEnum: string
{
    case APPLIED = "APPLIED";
    case PAID = "PAID";
    case FILLFORM = "FILLFORM";
    case ADMINACCEPTED = "ADMINACCEPTED";
    case REJECTED = "REJECTED";
    case DONE = "DONE";

    public static function getStates(): array
    {
        return array_column(self::cases(), 'value');
    }
}
