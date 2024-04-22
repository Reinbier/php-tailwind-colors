<?php

namespace Reinbier\PhpTailwindColors\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Reinbier\PhpTailwindColors\PhpTailwindColors
 */
class PhpTailwindColors extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Reinbier\PhpTailwindColors\PhpTailwindColors::class;
    }
}
