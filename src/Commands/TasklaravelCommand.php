<?php

namespace Musta20\Tasklaravel\Commands;

use Illuminate\Console\Command;

class TasklaravelCommand extends Command
{
    public $signature = 'tasklaravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
