<?php

namespace Reinbier\PhpTailwindColors;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasViews();
    }

    public function packageRegistered()
    {
        $this->app->scoped(
            ColorManager::class,
            fn () => new ColorManager(),
        );
    }

    public function packageBooted()
    {
        Blade::directive('tailwindColors', function (): string {
            return "<?php echo \Reinbier\PhpTailwindColors\Facades\TailwindColor::renderStyles() ?>";
        });
    }
}
