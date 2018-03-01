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

/**
 * Returns a DebugLogger instance.
 *
 * @return DebugLogger
 */
function debugLogger() {
    return app('debug_log');
}

/**
 * Returns an EasypayLogger instance.
 *
 * @return EasypayLogger
 */
function easypayLogger() {
    return app('easypay_log');
}

/**
 * Returns an IfthenLogger instance.
 *
 * @return IfthenLogger
 */
function ifthenLogger() {
    return app('ifthen_log');
}

/**
 * Returns a PaymentsLogger instance.
 *
 * @return PaymentsLogger
 */
function paymentsLogger() {
    return app('payments_log');
}

/**
 * Returns a PaypalLogger instance.
 *
 * @return PaypalLogger
 */
function paypalLogger() {
    return app('paypal_log');
}

/**
 * Returns a StripeLogger instance.
 *
 * @return StripeLogger
 */
function stripeLogger() {
    return app('stripe_log');
}
