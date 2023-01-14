<?php

namespace Musta20\Tasklaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Musta20\Tasklaravel\Tasklaravel
 */
class Tasklaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Musta20\Tasklaravel\Tasklaravel::class;
    }
}
