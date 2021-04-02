<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;

class TestAppCommand extends Command
{
    protected $signature = 'app:test';
    protected $description = 'Command description';

    public function handle(): void
    {
        try {
            $a = [8];
            logger($a[10]);
        } catch (Exception $exception) {
            dc_slack()->error($exception->getMessage());
        }
    }
}
