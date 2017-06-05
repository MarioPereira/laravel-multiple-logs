<?php

namespace CSUNMetaLab\MultipleLogs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ETD\Logging\Loggers\AuditLogger
 */
class AuditLog extends Facade
{
	/**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'audit_log'; }
}