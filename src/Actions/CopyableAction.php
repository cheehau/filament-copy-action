<?php

namespace Cheehau\FilamentCopyAction\Actions;

use Filament\Forms\Components\Actions\Action;

class CopyableAction
{
    public static function make(): void
    {
        Action::macro('wahaha', function () {
            return $this->prefix('€123');
        });
    }
}
