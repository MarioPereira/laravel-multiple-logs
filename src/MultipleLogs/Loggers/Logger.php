<?php

namespace CSUNMetaLab\MultipleLogs\Loggers;

use Illuminate\Log\Writer;
use Monolog\Logger as MonologLogger;

class Logger extends Writer
{
	/**
	 * Constructs a new Logger object.
	 *
	 * @param string $path The path to the log file
	 * @param string $channel The channel that will be used for writing
	 * @param string $logLevel Optional parameter to specify minimum log level
	 */
	public function __construct($path, $channel, $logLevel=null) {
		parent::__construct(new MonologLogger($channel));

		// use the default log level if we have not received a log level
		if(empty($logLevel)) {
			$logLevel = config('app.log_level');
		}

		// calculate the max days to store the daily files
		$maxDays = config('logging.max_days', 7);

		// make a decision based on the kind of log to use
		$type = config('app.log');
		switch($type) {
			case "single":
				$this->useFiles($path, $logLevel);
				break;
			case "daily":
				$this->useDailyFiles($path, $maxDays, $logLevel);
				break;
			case "syslog":
				$this->useSyslog("laravel", $logLevel);
				break;
			case "errorlog":
				$this->useErrorLog($logLevel);
				break;
		}
	}
}