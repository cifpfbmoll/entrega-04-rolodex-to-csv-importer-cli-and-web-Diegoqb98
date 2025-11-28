<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Log\Handlers\FileHandler;

/**
 * Logging Configuration.
 *
 * Stores the system logging configuration
 * settings.
 */
class Logger extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Error Logging Threshold
     * --------------------------------------------------------------------------
     *
     * You can enable error logging by setting a threshold over zero. The
     * threshold determines what gets logged. Any values at or above the
     * threshold will be logged.
     *
     * Threshold options are:
     *
     *    0 = Disables logging, Error logging TURNED OFF
     *    1 = Emergency Messages  - System is unusable
     *    2 = Alert Messages      - Action must be taken immediately
     *    3 = Critical Messages   - Application component unavailable, unexpected exception.
     *    4 = Runtime Errors      - Don't need immediate action, but should be monitored.
     *    5 = Warnings            - Exceptional occurrences that are not errors.
     *    6 = Notices             - Normal but significant events.
     *    7 = Info                - Interesting events, we recommend you use this as the minimum threshold.
     *    8 = Debug               - Detailed debug information.
     *    9 = All Messages
     *
     * You can also pass an array with threshold levels to have that level logged.
     *
     * For a live site you'll usually enable Critical or higher (3) to be logged otherwise
     * your log files will fill up very fast.
     */
    public int $threshold = 4;

    /**
     * --------------------------------------------------------------------------
     * Date Format for Logs
     * --------------------------------------------------------------------------
     *
     * Each item that is logged has an associated date. You can use PHP date
     * codes to set your own date formatting
     */
    public string $dateFormat = 'Y-m-d H:i:s';

    /**
     * --------------------------------------------------------------------------
     * Log Handlers
     * --------------------------------------------------------------------------
     *
     * The logging system supports multiple actions to be taken when something
     * is logged. This is done by allowing for multiple Handlers, or places to
     * log to. Each handler uses its own config array.
     *
     * Available handlers:
     *
     *   FileHandler
     *   ChromeLoggerHandler
     *   ErrorlogHandler
     */
    public array $handlers = [
        /*
         * --------------------------------------------------------------------
         * File Handler
         * --------------------------------------------------------------------
         */
        FileHandler::class => [
            'handles' => [
                'critical',
                'alert',
                'emergency',
                'debug',
                'error',
                'info',
                'notice',
                'warning',
            ],

            /*
             * The log levels that this handler will handle.
             */
            'path' => WRITEPATH . 'logs/',

            /*
             * The file extension to use when creating log files.
             */
            'fileExtension' => 'log',

            /*
             * The file permissions to use when writing log files.
             */
            'filePermissions' => 0644,
        ],
    ];
}
