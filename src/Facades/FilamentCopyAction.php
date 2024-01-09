<?php

namespace Cheehau\FilamentCopyAction\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cheehau\FilamentCopyAction\FilamentCopyAction
 */
class FilamentCopyAction extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Cheehau\FilamentCopyAction\FilamentCopyAction::class;
    }
}
