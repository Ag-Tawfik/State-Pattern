<?php

namespace Behavioral\Event;


class StateEnum
{
    public const APPLIED_STATE = "APPLIED";
    public const PAID_STATE = "PAID";
    public const FILLFORM_STATE = "FILLFORM";
    public const ADMINACCEPTED_STATE = "ADMINACCEPTED";
    public const REJECTED_STATE = "REJECTED";
    public const DONE_STATE = "DONE";


    public static function getStates(): array
    {
        return [
            self::APPLIED_STATE,
            self::FILLFORM_STATE,
            self::PAID_STATE,
            self::ADMINACCEPTED_STATE,
            self::REJECTED_STATE,
            self::DONE_STATE,
        ];
    }
}
