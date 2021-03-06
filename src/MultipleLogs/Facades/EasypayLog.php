<?php
/**
 * User: Mário Pereira
 * Date: 01-03-2018
 * Time: 12:02
 */

namespace CSUNMetaLab\MultipleLogs\Facades;

use Illuminate\Support\Facades\Facade;

class EasypayLog extends Facade
{
    protected static function getFacadeAccessor() {
        return 'easypay_log';
    }
}