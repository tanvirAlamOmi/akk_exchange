<?php

namespace App\Helpers\Enums;

trait EnumsTrait
{
    protected static $labels = [];

    /**
     * Initialize labels
     *
     * @return void
     */
    protected static function initLabels()
    {
        static::$labels = [];
    }

    /**
     * Get label for key
     *
     * @param $key
     * @return string
     */
    public static function getLabel($key)
    {
        return isset(static::getLabels()[$key]) ? trans(static::getLabels()[$key]) : '';
    }

    /**
     * Get type labels
     *
     * @return array
     */
    public static function getLabels()
    {
        //first initialize
        if (empty(static::$labels)) {
            static::initLabels();
        }

        return static::$labels;
    }

    /**
     * Get keys
     *
     * @return array
     */
    public static function getKeys()
    {
        return array_keys(static::getLabels());
    }
}
