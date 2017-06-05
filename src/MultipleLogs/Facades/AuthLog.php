<?php

namespace CSUNMetaLab\MultipleLogs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ETD\Logging\Loggers\AuthenticationLogger
 */
class AuthLog extends Facade
{
	/**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'auth_log'; }
}