<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use stdClass;

class TestAppCommand extends Command
{
    protected $signature = 'app:test';
    protected $description = 'Command description';

    public function handle(): void
    {
        dc_slack()->debug('message: ddd');
    }
}
