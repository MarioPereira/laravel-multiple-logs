<?php
/**
 * User: Mário Pereira
 * Date: 01-03-2018
 * Time: 12:00
 */

namespace CSUNMetaLab\MultipleLogs\Facades;

use Illuminate\Support\Facades\Facade;

class PaymentsLog extends Facade
{
    protected static function getFacadeAccessor() {
        return 'payments_log';
    }
}