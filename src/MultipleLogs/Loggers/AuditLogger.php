<?php

namespace CSUNMetaLab\MultipleLogs\Loggers;

class AuditLogger extends Logger
{
	/**
	 * Constructs a new AuditLogger object.
	 *
	 * @param string $path The path to the log file
	 * @param string $logLevel Optional parameter to specify minimum log level
	 */
	public function __construct($path, $logLevel="debug") {
		parent::__construct($path, 'audit', $logLevel);
	}
}