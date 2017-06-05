<?php

/**
 * Returns an AuditLogger instance.
 *
 * @return AuditLogger
 */
function auditLogger() {
	return app('audit_log');
}

/**
 * Returns an AuthLogger instance.
 *
 * @return AuthLogger
 */
function authLogger() {
	return app('auth_log');
}