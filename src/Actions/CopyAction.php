<?php

namespace Cheehau\FilamentCopyAction\Actions;

use Filament\Support\Concerns;
use Filament\Actions\Action as BaseAction;

class CopyAction extends BaseAction
{
    use Concerns\CanBeCopied;
}
