# Laravel Multiple Logs
Composer package for Laravel 5 that adds a few additional log files as well as facades to write to them.

Writing to `laravel.log` is fairly easy but sometimes it is a bit cumbersome to write to additional logs.

## Table of Contents

* [Installation](#installation)
* [Facades](#facades)
* [Usage Examples](#usage-examples)
* [Creating Custom File Loggers](#creating-custom-file-loggers)

## Installation

To install from Composer, use the following command:

```
composer require csun-metalab/laravel-multiple-logs
```

Now, add the following optional line(s) to your `.env` file:

```
# Number of days for which the "daily" logs should be kept; default is 7
LOG_MAX_DAYS=7
```

Next, add the service provider to your `providers` array in Laravel as follows:

```
'providers' => [
   //...

   CSUNMetaLab\MultipleLogs\Providers\LoggingServiceProvider::class,

   // You can also use the following depending on Laravel convention:
   // 'CSUNMetaLab\MultipleLogs\Providers\LoggingServiceProvider',

   //...
],
```

Add the facades you need for the new loggers to your `aliases` array in Laravel as follows:

```
'aliases' => [
    //...

    'AuditLog' => CSUNMetaLab\MultipleLogs\Facades\AuditLog::class,
    'AuthLog' => CSUNMetaLab\MultipleLogs\Facades\AuthLog::class,
    'DebugLog' => CSUNMetaLab\MultipleLogs\Facades\DebugLog::class,
    
    // ...

    // You can also use the following depending on Laravel convention:
    //'AuditLog' => 'CSUNMetaLab\MultipleLogs\Facades\AuditLog',
    //'AuthLog' => 'CSUNMetaLab\MultipleLogs\Facades\AuthLog',
    //'DebugLog' => 'CSUNMetaLab\MultipleLogs\Facades\DebugLog',

    //...
],
```

Finally, run the following Artisan command to publish the configuration:

```
php artisan vendor:publish
```

## Facades

The facades you can to your `config/app.php` file are the following:

### AuditLog

This writes to a file called `audit.log` in your `storage/logs` directory.

This supports all of the same methods the native `Log` facade does.

The matching `auditLogger()` helper method also supports them as instance methods.

### AuthLog

This writes to a file called `auth.log` in your `storage/logs` directory.

This supports all of the same methods the native `Log` facade does.

The matching `authLogger()` helper method also supports them as instance methods.

### DebugLog

This writes to a file called `debug.log` in your `storage/logs` directory.

This supports all of the same methods the native `Log` facade does.

The matching `debugLogger()` helper method also supports them as instance methods.

### EasypayLog

This writes to a file called `easypay.log` in your `storage/logs` directory.

This supports all of the same methods the native `Log` facade does.

The matching `easypayLogger()` helper method also supports them as instance methods.

### IfthenLog

This writes to a file called `ifthen.log` in your `storage/logs` directory.

This supports all of the same methods the native `Log` facade does.

The matching `ifthenLogger()` helper method also supports them as instance methods.

### PaymentsLog

This writes to a file called `payments.log` in your `storage/logs` directory.

This supports all of the same methods the native `Log` facade does.

The matching `paymentsLogger()` helper method also supports them as instance methods.

### PaypalLog

This writes to a file called `paypal.log` in your `storage/logs` directory.

This supports all of the same methods the native `Log` facade does.

The matching `paypalLogger()` helper method also supports them as instance methods.

### StripeLog

This writes to a file called `stripe.log` in your `storage/logs` directory.

This supports all of the same methods the native `Log` facade does.

The matching `stripeLogger()` helper method also supports them as instance methods.



## Usage Examples

### Writing INFO Data

```
AuditLog::info("User performed some action");
AuthLog::info("User authenticated successfully");

auditLogger()->info("User performed some action");
authLogger()->info("User authenticated successfully");
```

### Writing ERROR Data

```
AuditLog::error("User tried to perform an action unsuccessfully");
AuthLog::error("User could not authenticate");

auditLogger()->error("User tried to perform an action unsuccessfully");
authLogger()->error("User could not authenticate");
```

## Creating Custom File Loggers

You can create your own custom file loggers by extending the `Logger` class:

```
<?php
namespace App\Logging;
use CSUNMetaLab\MultipleLogs\Loggers\Logger;

class PurchaseLogger extends Logger
{
	/**
	 * Constructs a new PurchaseLogger object.
	 *
	 * @param string $path The path to the log file
	 * @param string $logLevel Optional parameter to specify minimum log level
	 */
	public function __construct($path, $logLevel="debug") {
		parent::__construct($path, 'purchase', $logLevel);
	}
}
?>
```

Now, you can just construct it and immediately use the methods, for example:

```
<?php
use App\Logging\PurchaseLogger;
$pLogger = new PurchaseLogger(storage_path('logs/purchases.log'));

$pLogger->info("Successfully made a purchase");
?>
```

It is now significantly easier to add multiple log files and additional logging capabilities in Laravel.