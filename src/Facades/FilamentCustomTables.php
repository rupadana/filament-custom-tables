<?php

namespace Rupadana\FilamentCustomTables\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rupadana\FilamentCustomTables\FilamentCustomTables
 */
class FilamentCustomTables extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rupadana\FilamentCustomTables\FilamentCustomTables::class;
    }
}
