<?php

namespace Reinbier\PhpTailwindColors\Commands;

use Illuminate\Console\Command;

class PhpTailwindColorsCommand extends Command
{
    public $signature = 'php-tailwind-colors';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
