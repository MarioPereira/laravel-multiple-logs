<?php
/**
 * User: Mário Pereira
 * Date: 01-03-2018
 * Time: 12:09
 */

namespace CSUNMetaLab\MultipleLogs\Loggers;

class EasypayLogger extends Logger
{
    /**
     * Constructs a new EasypayLogger object.
     *
     * @param string $path The path to the log file
     * @param string $logLevel Optional parameter to specify minimum log level
     */
    public function __construct($path, $logLevel="debug") {
        parent::__construct($path, 'easypay', $logLevel);
    }
}