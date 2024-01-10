<?php

namespace Cheehau\FilamentCopyAction;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCopyActionServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-copy-action';

    public static string $viewNamespace = 'filament-copy-action';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->askToStarRepoOnGitHub('cheehau/filament-copy-action');
            });
    }
}
