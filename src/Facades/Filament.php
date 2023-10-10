<?php

namespace Altwaireb\Filament\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Altwaireb\Filament\Filament
 */
class Filament extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Altwaireb\Filament\Filament::class;
    }
}
