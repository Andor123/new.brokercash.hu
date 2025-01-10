<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1\LogConfig;

use UnexpectedValueException;

/**
 * The severity level of platform logging for this channel. Logs with a
 * severity level higher than or equal to the chosen severity level will be
 * logged and can be viewed through Cloud Logging.
 * The severity level of a log is ranked as followed from low to high: DEBUG <
 * INFO < NOTICE < WARNING < ERROR < CRITICAL < ALERT < EMERGENCY.
 * See
 * [LogSeverity](https://cloud.google.com/logging/docs/reference/v2/rest/v2/LogEntry#logseverity)
 * for more information.
 *
 * Protobuf type <code>google.cloud.video.livestream.v1.LogConfig.LogSeverity</code>
 */
class LogSeverity
{
    /**
     * Log severity is not specified. This is the same as log severity is OFF.
     *
     * Generated from protobuf enum <code>LOG_SEVERITY_UNSPECIFIED = 0;</code>
     */
    const LOG_SEVERITY_UNSPECIFIED = 0;
    /**
     * Log is turned off.
     *
     * Generated from protobuf enum <code>OFF = 1;</code>
     */
    const OFF = 1;
    /**
     * Log with severity higher than or equal to DEBUG are logged.
     *
     * Generated from protobuf enum <code>DEBUG = 100;</code>
     */
    const DEBUG = 100;
    /**
     * Logs with severity higher than or equal to INFO are logged.
     *
     * Generated from protobuf enum <code>INFO = 200;</code>
     */
    const INFO = 200;
    /**
     * Logs with severity higher than or equal to WARNING are logged.
     *
     * Generated from protobuf enum <code>WARNING = 400;</code>
     */
    const WARNING = 400;
    /**
     * Logs with severity higher than or equal to ERROR are logged.
     *
     * Generated from protobuf enum <code>ERROR = 500;</code>
     */
    const ERROR = 500;

    private static $valueToName = [
        self::LOG_SEVERITY_UNSPECIFIED => 'LOG_SEVERITY_UNSPECIFIED',
        self::OFF => 'OFF',
        self::DEBUG => 'DEBUG',
        self::INFO => 'INFO',
        self::WARNING => 'WARNING',
        self::ERROR => 'ERROR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


