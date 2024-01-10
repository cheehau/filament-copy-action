<?php

namespace Cheehau\FilamentCopyAction\Actions;

use Filament\Support\Concerns;
use Filament\Actions\Action as BaseAction;

class CopyAction extends BaseAction
{
    use Concerns\CanBeCopied;

    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->successNotificationTitle(__('Copied!'))
            ->icon('heroicon-o-clipboard-copy')
            ->extraAttributes(fn () => [
                'x-data' => '',
                'x-on:click' => new HtmlString(
                    'window.navigator.clipboard.writeText('.Js::from($this->getCopyable()).');'
                    . (($title = $this->getSuccessNotificationTitle()) ? ' $tooltip('.Js::from($title).');' : '')
                ),
            ]);
    }
}
