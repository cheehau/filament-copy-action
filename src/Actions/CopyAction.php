<?php

namespace Cheehau\FilamentCopyAction\Actions;

use Filament\Actions\Action as BaseAction;
use Filament\Support\Concerns;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Js;

class CopyAction extends BaseAction
{
    use Concerns\CanBeCopied;

    protected mixed $content = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->successNotificationTitle(__('Copied!'))
            ->icon('heroicon-o-clipboard-document')
            ->livewireClickHandlerEnabled(false)
            ->extraAttributes(fn () => [
                'x-on:click' => new HtmlString(
                    'window.navigator.clipboard.writeText('.Js::from($this->getContent()).');'
                    .(($title = $this->getSuccessNotificationTitle()) ? ' $tooltip('.Js::from($title).');' : '')
                ),
            ]);
    }

    public function content(mixed $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getContent(): mixed
    {
        return $this->evaluate($this->content);
    }
}
