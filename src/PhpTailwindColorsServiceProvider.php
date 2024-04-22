<?php

namespace Reinbier\PhpTailwindColors;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Reinbier\PhpTailwindColors\Commands\PhpTailwindColorsCommand;

class PhpTailwindColorsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('php-tailwind-colors')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_php-tailwind-colors_table')
            ->hasCommand(PhpTailwindColorsCommand::class);
    }
}
