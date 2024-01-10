<?php

namespace Cheehau\FilamentCopyAction\Actions;

use Filament\Actions\Action as BaseAction;
use Filament\Support\Concerns;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Js;

class CopyAction extends BaseAction
{
    use Concerns\CanBeCopied;

    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->successNotificationTitle(__('Copied!'))
            ->icon('heroicon-o-clipboard-document')
            ->livewireClickHandlerEnabled(false)
            ->extraAttributes(fn () => [
                'x-on:click' => new HtmlString(
                    'window.navigator.clipboard.writeText('.Js::from($this->getCopyableState(null)).');'
                    .(($title = $this->getSuccessNotificationTitle()) ? ' $tooltip('.Js::from($title).');' : '')
                ),
            ]);
    }
}
