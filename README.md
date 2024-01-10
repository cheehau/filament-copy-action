# CopyAction - Copy To Clipboard with one action button

## Installation

You can install the package via composer:

```bash
composer require cheehau/filament-copy-action
```

## Usage

```php
use \Cheehau\FilamentCopyAction\Actions\CopyAction;

CopyAction::make('test')
    ->content('Content to be copied into clipboard')
    ->copyMessage('Copied!!')
```

## Credits

-   Inspired by [Copy Actions](https://github.com/webbingbrasil/filament-copyactions)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
