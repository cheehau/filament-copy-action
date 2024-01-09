<?php

namespace Cheehau\FilamentCopyAction\Commands;

use Illuminate\Console\Command;

class FilamentCopyActionCommand extends Command
{
    public $signature = 'filament-copy-action';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
