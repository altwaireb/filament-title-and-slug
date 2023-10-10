<?php

namespace Altwaireb\Filament\Commands;

use Illuminate\Console\Command;

class FilamentCommand extends Command
{
    public $signature = 'filament-title-and-slug';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
