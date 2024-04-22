# For using & generating TailwindCSS colors in Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/reinbier/php-tailwind-colors.svg?style=flat-square)](https://packagist.org/packages/reinbier/php-tailwind-colors)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/reinbier/php-tailwind-colors/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/reinbier/php-tailwind-colors/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/reinbier/php-tailwind-colors/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/reinbier/php-tailwind-colors/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/reinbier/php-tailwind-colors.svg?style=flat-square)](https://packagist.org/packages/reinbier/php-tailwind-colors)

**NOTE**: This package is based on same Color Generator [FilamentPHP](https://filamentphp.com/) uses to generate shades of TailwindCSS colors. 

## Installation

You can install the package via composer:

```bash
composer require reinbier/php-tailwind-colors
```

## Usage

The package enables you to generate your own default color variables or register your own custom TailwindCSS colors for use in your HTML. Simply add the Blade directive `@tailwindColors` to your HTML to gain access to these variables.

```bladehtml
<html>
<head>
    <title>My page</title>
    
    @tailwindColors
    
    <!-- more styles -->    
</head>
    <body>
    ...
    </body>
</html>
```
This outputs:
```html

<style>
    :root {
        --danger-50: 254, 242, 242;
        --danger-100: 254, 226, 226;
        --danger-200: 254, 202, 202;
        --danger-300: 252, 165, 165;
        --danger-400: 248, 113, 113;
        --danger-500: 239, 68, 68;
        --danger-600: 220, 38, 38;
        --danger-700: 185, 28, 28;
        --danger-800: 153, 27, 27;
        --danger-900: 127, 29, 29;
        --danger-950: 69, 10, 10;
        --gray-50: 250, 250, 250;
        --gray-100: 244, 244, 245;
        --gray-200: 228, 228, 231;
        (...)
        --warning-800: 146, 64, 14;
        --warning-900: 120, 53, 15;
        --warning-950: 69, 26, 3;
    }
</style>
```
With default colors from the `Color` class, being:
```php
use Reinbier\PhpTailwindColors\Color;

$colors = [
    'danger' => Color::Red,
    'gray' => Color::Zinc,
    'info' => Color::Blue,
    'primary' => Color::Indigo,
    'success' => Color::Green,
    'warning' => Color::Amber,
];
```

Now you can use these variables in your CSS files. These default colors also come with a Tailwind `preset` file.

To make use of these defaults as Tailwind classes like you're used to, you need to import this preset in your existing `tailwind.config.js`.

```js
import preset from './vendor/reinbier/php-tailwind-colors/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        ...
    ],
}
```

## Register colors
The generated CSS variables are mapped to Tailwind classes in the preset file and can be customized. 

To generate entirely new colors, please read 'Registering extra colors' below.

### Customizing the default colors

From a service provider's `boot()` method, or middleware, you can call the `TailwindColor::register()` method, which you can use to customize the default colors.

There are 6 default colors that are used, like mentioned above:

The `Color` class contains every [Tailwind CSS color](https://tailwindcss.com/docs/customizing-colors#color-palette-reference) to choose from.

### Using a non-Tailwind color

You can use custom colors that are not included in the [Tailwind CSS color](https://tailwindcss.com/docs/customizing-colors#color-palette-reference) palette by passing an array of color shades from `50` to `950` in RGB format:

```php
use Reinbier\PhpTailwindColors\Facades\TailwindColor;

TailwindColor::register([
    'danger' => [
        50 => '254, 242, 242',
        100 => '254, 226, 226',
        200 => '254, 202, 202',
        300 => '252, 165, 165',
        400 => '248, 113, 113',
        500 => '239, 68, 68',
        600 => '220, 38, 38',
        700 => '185, 28, 28',
        800 => '153, 27, 27',
        900 => '127, 29, 29',
        950 => '69, 10, 10',
    ],
]);
```

### Generating a custom color from a hex code

You can use the `Color::hex()` method to generate a custom color palette from a hex code:

```php
use Reinbier\PhpTailwindColors\Color;
use Reinbier\PhpTailwindColors\Facades\TailwindColor;

TailwindColor::register([
    'danger' => Color::hex('#ff0000'),
]);
```

### Generating a custom color from an RGB value

You can use the `Color::rgb()` method to generate a custom color palette from an RGB value:

```php
use Reinbier\PhpTailwindColors\Color;
use Reinbier\PhpTailwindColors\Facades\TailwindColor;

TailwindColor::register([
    'danger' => Color::rgb('rgb(255, 0, 0)'),
]);
```

### Registering extra colors

You can register extra colors that you can use throughout Filament:

```php
use Reinbier\PhpTailwindColors\Color;
use Reinbier\PhpTailwindColors\Facades\TailwindColor;

TailwindColor::register([
    'mycolor' => Color::hex('#ffff00'),
]);
```

Now, when you want to use this color in your HTML (like `text-mycolor-300` or `bg-mycolor-950`), you should append it to your colors in your `tailwind.config.js` file, and rebuild your assets:

```js
export default {
    
    // other tailwind configuration...
    
    theme: {
        extend: {
            colors: {
                mycolor: {
                    50: 'rgba(var(--mycolor-50), <alpha-value>)',
                    100: 'rgba(var(--mycolor-100), <alpha-value>)',
                    200: 'rgba(var(--mycolor-200), <alpha-value>)',
                    300: 'rgba(var(--mycolor-300), <alpha-value>)',
                    400: 'rgba(var(--mycolor-400), <alpha-value>)',
                    500: 'rgba(var(--mycolor-500), <alpha-value>)',
                    600: 'rgba(var(--mycolor-600), <alpha-value>)',
                    700: 'rgba(var(--mycolor-700), <alpha-value>)',
                    800: 'rgba(var(--mycolor-800), <alpha-value>)',
                    900: 'rgba(var(--mycolor-900), <alpha-value>)',
                    950: 'rgba(var(--mycolor-950), <alpha-value>)',
                },
            }
        }
    }
}
```

==> Finally, build your assets and you're all set!

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [reinbier](https://github.com/reinbier)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
