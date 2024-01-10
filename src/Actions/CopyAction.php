<?php

namespace Cheehau\FilamentCopyAction\Actions;

use Filament\Actions\Action as BaseAction;
use Filament\Support\Concerns;

class CopyAction extends BaseAction
{
    use Concerns\CanBeCopied;
}
