<?php

namespace CSUNMetaLab\MultipleLogs\Providers;

use CSUNMetaLab\MultipleLogs\Loggers\AuditLogger;
use CSUNMetaLab\MultipleLogs\Loggers\AuthenticationLogger;
use CSUNMetaLab\MultipleLogs\Loggers\DebugLogger;
use CSUNMetaLab\MultipleLogs\Loggers\EasypayLogger;
use CSUNMetaLab\MultipleLogs\Loggers\IfthenLogger;
use CSUNMetaLab\MultipleLogs\Loggers\PaymentsLogger;
use CSUNMetaLab\MultipleLogs\Loggers\PaypalLogger;
use CSUNMetaLab\MultipleLogs\Loggers\StripeLogger;

use Illuminate\Support\ServiceProvider;

class LoggingServiceProvider extends ServiceProvider
{
	public function register() {
		// register the audit log into the service container
		$this->app->bind('audit_log', function($app) {
			return new AuditLogger(
				storage_path('logs/audit.log'),
				config('app.log_level', 'debug')
			);
		});

		// register the authentication log into the service container
		$this->app->bind('auth_log', function($app) {
			return new AuthenticationLogger(
				storage_path('logs/auth.log'),
				config('app.log_level', 'debug')
			);
		});

        // register the debug log into the service container
        $this->app->bind('debug_log', function($app) {
            return new DebugLogger(
                storage_path('logs/debug.log'),
                config('app.log_level', 'debug')
            );
        });

        // register the Easypay log into the service container
        $this->app->bind('easypay_log', function($app) {
            return new EasypayLogger(
                storage_path('logs/easypay.log'),
                config('app.log_level', 'debug')
            );
        });

        // register the Ifthen log into the service container
        $this->app->bind('ifthen_log', function($app) {
            return new IfthenLogger(
                storage_path('logs/ifthen.log'),
                config('app.log_level', 'debug')
            );
        });

        // register the Payments log into the service container
        $this->app->bind('payments_log', function($app) {
            return new PaymentsLogger(
                storage_path('logs/payments.log'),
                config('app.log_level', 'debug')
            );
        });

        // register the Paypal log into the service container
        $this->app->bind('paypal_log', function($app) {
            return new PaypalLogger(
                storage_path('logs/easypay.log'),
                config('app.log_level', 'debug')
            );
        });

        // register the Stripe log into the service container
        $this->app->bind('stripe_log', function($app) {
            return new StripeLogger(
                storage_path('logs/stripe.log'),
                config('app.log_level', 'debug')
            );
        });

		// register the facade for the audit log
		$this->app->alias('audit_log', AuditLogger::class);

		// register the facade for the auth log
		$this->app->alias('auth_log', AuthenticationLogger::class);

        // register the facade for the debug log
        $this->app->alias('debug_log', DebugLogger::class);

        // register the facade for the Easypay log
        $this->app->alias('easypay_log', EasypayLogger::class);

        // register the facade for the Ifthen log
        $this->app->alias('ifthen_log', IfthenLogger::class);

        // register the facade for the payments log
        $this->app->alias('payments_log', PaymentsLogger::class);

        // register the facade for the Paypal log
        $this->app->alias('paypal_log', PaypalLogger::class);

        // register the facade for the Stripe log
        $this->app->alias('stripe_log', StripeLogger::class);
	}

	public function boot() {
		$this->publishes([
        	__DIR__.'/../config/logging.php' => config_path('logging.php'),
    	]);
	}
}