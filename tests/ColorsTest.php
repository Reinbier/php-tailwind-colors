<?php

use Reinbier\PhpTailwindColors\Color;
use Reinbier\PhpTailwindColors\Facades\TailwindColor;

it('has default colors', function () {
    expect(TailwindColor::getColors())
        ->toHaveKeys(['danger', 'gray', 'info', 'primary', 'success', 'warning']);
});

it('can disable default colors', function () {
    TailwindColor::disableDefaultColors();
 
    expect(TailwindColor::getColors())
        ->toBeEmpty();

    // re-enable the default colors again
    TailwindColor::disableDefaultColors(false);
});

it('can register custom colors', function () {
    TailwindColor::register([
        'secondary' => Color::hex('#ff0000'),
    ]);

    expect(TailwindColor::getColors())
        ->toHaveKey('secondary');
});
