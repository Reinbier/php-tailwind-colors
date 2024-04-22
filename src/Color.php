<?php

namespace Reinbier\PhpTailwindColors;

use Spatie\Color\Hex;
use Spatie\Color\Rgb;

class Color
{
    public const Slate = [
        50 => '248, 250, 252',
        100 => '241, 245, 249',
        200 => '226, 232, 240',
        300 => '203, 213, 225',
        400 => '148, 163, 184',
        500 => '100, 116, 139',
        600 => '71, 85, 105',
        700 => '51, 65, 85',
        800 => '30, 41, 59',
        900 => '15, 23, 42',
        950 => '2, 6, 23',
    ];

    public const Gray = [
        50 => '249, 250, 251',
        100 => '243, 244, 246',
        200 => '229, 231, 235',
        300 => '209, 213, 219',
        400 => '156, 163, 175',
        500 => '107, 114, 128',
        600 => '75, 85, 99',
        700 => '55, 65, 81',
        800 => '31, 41, 55',
        900 => '17, 24, 39',
        950 => '3, 7, 18',
    ];

    public const Zinc = [
        50 => '250, 250, 250',
        100 => '244, 244, 245',
        200 => '228, 228, 231',
        300 => '212, 212, 216',
        400 => '161, 161, 170',
        500 => '113, 113, 122',
        600 => '82, 82, 91',
        700 => '63, 63, 70',
        800 => '39, 39, 42',
        900 => '24, 24, 27',
        950 => '9, 9, 11',
    ];

    public const Neutral = [
        50 => '250, 250, 250',
        100 => '245, 245, 245',
        200 => '229, 229, 229',
        300 => '212, 212, 212',
        400 => '163, 163, 163',
        500 => '115, 115, 115',
        600 => '82, 82, 82',
        700 => '64, 64, 64',
        800 => '38, 38, 38',
        900 => '23, 23, 23',
        950 => '10, 10, 10',
    ];

    public const Stone = [
        50 => '250, 250, 249',
        100 => '245, 245, 244',
        200 => '231, 229, 228',
        300 => '214, 211, 209',
        400 => '168, 162, 158',
        500 => '120, 113, 108',
        600 => '87, 83, 78',
        700 => '68, 64, 60',
        800 => '41, 37, 36',
        900 => '28, 25, 23',
        950 => '12, 10, 9',
    ];

    public const Red = [
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
    ];

    public const Orange = [
        50 => '255, 247, 237',
        100 => '255, 237, 213',
        200 => '254, 215, 170',
        300 => '253, 186, 116',
        400 => '251, 146, 60',
        500 => '249, 115, 22',
        600 => '234, 88, 12',
        700 => '194, 65, 12',
        800 => '154, 52, 18',
        900 => '124, 45, 18',
        950 => '67, 20, 7',
    ];

    public const Amber = [
        50 => '255, 251, 235',
        100 => '254, 243, 199',
        200 => '253, 230, 138',
        300 => '252, 211, 77',
        400 => '251, 191, 36',
        500 => '245, 158, 11',
        600 => '217, 119, 6',
        700 => '180, 83, 9',
        800 => '146, 64, 14',
        900 => '120, 53, 15',
        950 => '69, 26, 3',
    ];

    public const Yellow = [
        50 => '254, 252, 232',
        100 => '254, 249, 195',
        200 => '254, 240, 138',
        300 => '253, 224, 71',
        400 => '250, 204, 21',
        500 => '234, 179, 8',
        600 => '202, 138, 4',
        700 => '161, 98, 7',
        800 => '133, 77, 14',
        900 => '113, 63, 18',
        950 => '66, 32, 6',
    ];

    public const Lime = [
        50 => '247, 254, 231',
        100 => '236, 252, 203',
        200 => '217, 249, 157',
        300 => '190, 242, 100',
        400 => '163, 230, 53',
        500 => '132, 204, 22',
        600 => '101, 163, 13',
        700 => '77, 124, 15',
        800 => '63, 98, 18',
        900 => '54, 83, 20',
        950 => '26, 46, 5',
    ];

    public const Green = [
        50 => '240, 253, 244',
        100 => '220, 252, 231',
        200 => '187, 247, 208',
        300 => '134, 239, 172',
        400 => '74, 222, 128',
        500 => '34, 197, 94',
        600 => '22, 163, 74',
        700 => '21, 128, 61',
        800 => '22, 101, 52',
        900 => '20, 83, 45',
        950 => '5, 46, 22',
    ];

    public const Emerald = [
        50 => '236, 253, 245',
        100 => '209, 250, 229',
        200 => '167, 243, 208',
        300 => '110, 231, 183',
        400 => '52, 211, 153',
        500 => '16, 185, 129',
        600 => '5, 150, 105',
        700 => '4, 120, 87',
        800 => '6, 95, 70',
        900 => '6, 78, 59',
        950 => '2, 44, 34',
    ];

    public const Teal = [
        50 => '240, 253, 250',
        100 => '204, 251, 241',
        200 => '153, 246, 228',
        300 => '94, 234, 212',
        400 => '45, 212, 191',
        500 => '20, 184, 166',
        600 => '13, 148, 136',
        700 => '15, 118, 110',
        800 => '17, 94, 89',
        900 => '19, 78, 74',
        950 => '4, 47, 46',
    ];

    public const Cyan = [
        50 => '236, 254, 255',
        100 => '207, 250, 254',
        200 => '165, 243, 252',
        300 => '103, 232, 249',
        400 => '34, 211, 238',
        500 => '6, 182, 212',
        600 => '8, 145, 178',
        700 => '14, 116, 144',
        800 => '21, 94, 117',
        900 => '22, 78, 99',
        950 => '8, 51, 68',
    ];

    public const Sky = [
        50 => '240, 249, 255',
        100 => '224, 242, 254',
        200 => '186, 230, 253',
        300 => '125, 211, 252',
        400 => '56, 189, 248',
        500 => '14, 165, 233',
        600 => '2, 132, 199',
        700 => '3, 105, 161',
        800 => '7, 89, 133',
        900 => '12, 74, 110',
        950 => '8, 47, 73',
    ];

    public const Blue = [
        50 => '239, 246, 255',
        100 => '219, 234, 254',
        200 => '191, 219, 254',
        300 => '147, 197, 253',
        400 => '96, 165, 250',
        500 => '59, 130, 246',
        600 => '37, 99, 235',
        700 => '29, 78, 216',
        800 => '30, 64, 175',
        900 => '30, 58, 138',
        950 => '23, 37, 84',
    ];

    public const Indigo = [
        50 => '238, 242, 255',
        100 => '224, 231, 255',
        200 => '199, 210, 254',
        300 => '165, 180, 252',
        400 => '129, 140, 248',
        500 => '99, 102, 241',
        600 => '79, 70, 229',
        700 => '67, 56, 202',
        800 => '55, 48, 163',
        900 => '49, 46, 129',
        950 => '30, 27, 75',
    ];

    public const Violet = [
        50 => '245, 243, 255',
        100 => '237, 233, 254',
        200 => '221, 214, 254',
        300 => '196, 181, 253',
        400 => '167, 139, 250',
        500 => '139, 92, 246',
        600 => '124, 58, 237',
        700 => '109, 40, 217',
        800 => '91, 33, 182',
        900 => '76, 29, 149',
        950 => '46, 16, 101',
    ];

    public const Purple = [
        50 => '250, 245, 255',
        100 => '243, 232, 255',
        200 => '233, 213, 255',
        300 => '216, 180, 254',
        400 => '192, 132, 252',
        500 => '168, 85, 247',
        600 => '147, 51, 234',
        700 => '126, 34, 206',
        800 => '107, 33, 168',
        900 => '88, 28, 135',
        950 => '59, 7, 100',
    ];

    public const Fuchsia = [
        50 => '253, 244, 255',
        100 => '250, 232, 255',
        200 => '245, 208, 254',
        300 => '240, 171, 252',
        400 => '232, 121, 249',
        500 => '217, 70, 239',
        600 => '192, 38, 211',
        700 => '162, 28, 175',
        800 => '134, 25, 143',
        900 => '112, 26, 117',
        950 => '74, 4, 78',
    ];

    public const Pink = [
        50 => '253, 242, 248',
        100 => '252, 231, 243',
        200 => '251, 207, 232',
        300 => '249, 168, 212',
        400 => '244, 114, 182',
        500 => '236, 72, 153',
        600 => '219, 39, 119',
        700 => '190, 24, 93',
        800 => '157, 23, 77',
        900 => '131, 24, 67',
        950 => '80, 7, 36',
    ];

    public const Rose = [
        50 => '255, 241, 242',
        100 => '255, 228, 230',
        200 => '254, 205, 211',
        300 => '253, 164, 175',
        400 => '251, 113, 133',
        500 => '244, 63, 94',
        600 => '225, 29, 72',
        700 => '190, 18, 60',
        800 => '159, 18, 57',
        900 => '136, 19, 55',
        950 => '76, 5, 25',
    ];

    /**
     * @return array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}
     */
    public static function hex(string $color): array
    {
        return static::generateShades(Hex::fromString($color)->toRgb());
    }

    /**
     * @return array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}
     */
    public static function rgb(string $color): array
    {
        return static::generateShades(Rgb::fromString($color));
    }

    /**
     * @return array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}
     */
    protected static function generateShades(Rgb $color): array
    {
        $colors = [];

        $intensityMap = [
            50 => 0.95,
            100 => 0.9,
            200 => 0.75,
            300 => 0.6,
            400 => 0.3,
            500 => 1.0,
            600 => 0.9,
            700 => 0.75,
            800 => 0.6,
            900 => 0.49,
            950 => 0.3,
        ];

        foreach ($intensityMap as $shade => $intensity) {
            if ($shade < 500) {
                $red = ((255 - $color->red()) * $intensity) + $color->red();
                $green = ((255 - $color->green()) * $intensity) + $color->green();
                $blue = ((255 - $color->blue()) * $intensity) + $color->blue();
            } else {
                $red = $color->red() * $intensity;
                $green = $color->green() * $intensity;
                $blue = $color->blue() * $intensity;
            }

            $colors[$shade] = sprintf('%s, %s, %s', round($red), round($green), round($blue));
        }

        return $colors;
    }

    /**
     * @return array<string, array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}>
     */
    public static function all(): array
    {
        return [
            'slate' => static::Slate,
            'gray' => static::Gray,
            'zinc' => static::Zinc,
            'neutral' => static::Neutral,
            'stone' => static::Stone,
            'red' => static::Red,
            'orange' => static::Orange,
            'amber' => static::Amber,
            'yellow' => static::Yellow,
            'lime' => static::Lime,
            'green' => static::Green,
            'emerald' => static::Emerald,
            'teal' => static::Teal,
            'cyan' => static::Cyan,
            'sky' => static::Sky,
            'blue' => static::Blue,
            'indigo' => static::Indigo,
            'violet' => static::Violet,
            'purple' => static::Purple,
            'fuchsia' => static::Fuchsia,
            'pink' => static::Pink,
            'rose' => static::Rose,
        ];
    }
}
