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
        # Log with default content debug
        dc_slack('This is debug mode');
        # Log with color
        dc_slack()->debug('DEBUG');
        dc_slack()->info('INFO');
        dc_slack()->warning('WARNING');
        dc_slack()->error('ERROR');
        # With title
        dc_slack()->title('This is title')->warning('THIS IS VERY IMPORTANT');
        # With exception
        try {
            # Some code wrong
        } catch (Exception $exception) {
            dc_slack()->exception($exception);
            # OR
            dc_slack()->title("THIS IS BUG")->exception($exception);
        }
        # With array | object
        $a = [1, 2, 3];
        dc_slack()->array($a);
        $b = new stdClass();
        $b->foo = 'bar';
        dc_slack()->title('THIS IS OBJECT')->object($b);
    }
}
