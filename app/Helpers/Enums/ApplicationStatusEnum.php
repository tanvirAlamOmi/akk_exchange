<?php

namespace App\Helpers\Enums;

abstract class ApplicationStatusEnum
{
    use EnumsTrait;

    const INCOMPLETE = 0;
    const COMPLETED = 1;
    const RECHECK = 2;
    const ACCEPTED = 3;
    const REJECTED = 4;
    
    /**
     * Initialize labels
     */
    protected static function initLabels()
    {
        static::$labels = [
            static::INCOMPLETE => __('Incomplete'),
            static::COMPLETED => __('Completed'),
            static::RECHECK => __('Recheck'),
            static::ACCEPTED => __('Accepted'),
            static::REJECTED => __('Rejected'),
        ];
    }
}
