<?php

namespace Rupadana\FilamentCustomTables\Commands;

use Illuminate\Console\Command;

class FilamentCustomTablesCommand extends Command
{
    public $signature = 'filament-custom-tables';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
