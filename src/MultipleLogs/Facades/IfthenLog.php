<?php
/**
 * User: Mário Pereira
 * Date: 01-03-2018
 * Time: 12:03
 */

namespace CSUNMetaLab\MultipleLogs\Facades;

use Illuminate\Support\Facades\Facade;

class IfthenLog extends Facade
{
    protected static function getFacadeAccessor() {
        return 'ifthen_log';
    }
}