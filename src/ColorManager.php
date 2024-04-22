<?php

namespace Reinbier\PhpTailwindColors;

use Spatie\Color\Hex;

class ColorManager
{
    protected array $colors = [];

    /**
     * Indicates if the default colors are enabled.
     */
    protected static bool $defaultColors = true;

    /**
     * @var array<string,array<int>>
     */
    protected array $overridingShades = [];

    /**
     * @var array<string,array<int>>
     */
    protected array $addedShades = [];

    /**
     * @var array<string,array<int>>
     */
    protected array $removedShades = [];

    /**
     * @param  array<string, array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string} | string>  $colors
     */
    public function register(array $colors): static
    {
        $this->colors[] = $colors;

        return $this;
    }

    /**
     * @param  array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string} | string  $color
     * @return array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string} | string
     */
    public function processColor(array|string $color): array|string
    {
        if (is_string($color) && str_starts_with($color, '#')) {
            return Color::hex($color);
        }

        if (is_string($color) && str_starts_with($color, 'rgb')) {
            return Color::rgb($color);
        }

        if (is_array($color)) {
            return array_map(function (string $color): string {
                if (str_starts_with($color, '#')) {
                    $color = Hex::fromString($color)->toRgb();

                    return "{$color->red()}, {$color->green()}, {$color->blue()}";
                }

                if (str_starts_with($color, 'rgb')) {
                    return (string) str($color)
                        ->after('rgb(')
                        ->before(')');
                }

                return $color;
            }, $color);
        }

        return $color;
    }

    /**
     * @return array<string, array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}>
     */
    public function getColors(): array
    {
        $colors = [];

        if (static::$defaultColors) {
            $colors = [
                'danger' => Color::Red,
                'gray' => Color::Zinc,
                'info' => Color::Blue,
                'primary' => Color::Indigo,
                'success' => Color::Green,
                'warning' => Color::Amber,
            ];
        }

        // merge with colors field
        foreach ($this->colors as $set) {
            foreach ($set as $name => $color) {
                $colors[$name] = $this->processColor($color);
            }
        }

        return $colors;
    }

    /**
     * @param  array<int>  $shades
     */
    public function overrideShades(string $alias, array $shades): void
    {
        $this->overridingShades[$alias] = $shades;
    }

    /**
     * @return array<int> | null
     */
    public function getOverridingShades(string $alias): ?array
    {
        return $this->overridingShades[$alias] ?? null;
    }

    /**
     * @param  array<int>  $shades
     */
    public function addShades(string $alias, array $shades): void
    {
        $this->addedShades[$alias] = $shades;
    }

    /**
     * @return array<int> | null
     */
    public function getAddedShades(string $alias): ?array
    {
        return $this->addedShades[$alias] ?? null;
    }

    /**
     * @param  array<int>  $shades
     */
    public function removeShades(string $alias, array $shades): void
    {
        $this->removedShades[$alias] = $shades;
    }

    /**
     * @return array<int> | null
     */
    public function getRemovedShades(string $alias): ?array
    {
        return $this->removedShades[$alias] ?? null;
    }

    /**
     * Disable default colors.
     *
     * @return void
     */
    public static function disableDefaultColors(bool $state = true)
    {
        static::$defaultColors = ! $state;
    }

    public function renderStyles(): string
    {
        $variables = [];

        foreach ($this->getColors() as $name => $shades) {
            foreach ($shades as $shade => $color) {
                $variables["{$name}-{$shade}"] = $color;
            }
        }

        return view('php-tailwind-colors::assets', [
            'colorVariables' => $variables,
        ])->render();
    }
}
