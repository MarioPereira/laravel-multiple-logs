<?php
/**
 * User: Mário Pereira
 * Date: 01-03-2018
 * Time: 12:53
 */

namespace CSUNMetaLab\MultipleLogs\Facades;

use Illuminate\Support\Facades\Facade;

class DebugLog extends Facade
{
    protected static function getFacadeAccessor() {
        return 'debug_log';
    }
}