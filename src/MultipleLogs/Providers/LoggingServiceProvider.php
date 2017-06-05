<?php

namespace CSUNMetaLab\MultipleLogs\Providers;

use CSUNMetaLab\MultipleLogs\Loggers\AuditLogger;
use CSUNMetaLab\MultipleLogs\Loggers\AuthenticationLogger;

use Illuminate\Support\ServiceProvider;

class LoggingServiceProvider extends ServiceProvider
{
	public function register() {
		// register the audit log into the service container
		$this->app->bind('audit_log', function($app) {
			return new AuditLogger(
				storage_path('logs/audit.log'),
				'debug'
			);
		});

		// register the authentication log into the service container
		$this->app->bind('auth_log', function($app) {
			return new AuthenticationLogger(
				storage_path('logs/auth.log'),
				'debug'
			);
		});

		// register the facade for the audit log
		$this->app->alias('audit_log', AuditLogger::class);

		// register the facade for the auth log
		$this->app->alias('auth_log', AuthenticationLogger::class);
	}

	public function boot() {
		$this->publishes([
        	__DIR__.'/../config/logging.php' => config_path('logging.php'),
    	]);
	}
}