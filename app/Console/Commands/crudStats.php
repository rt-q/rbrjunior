<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;



class crudStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crudStats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        // sorry about this one, i have like 50 minutes left :(

        $log = file(storage_path().'/logs/laravel.log');
        
        $logStart = Carbon::now();
        $logEnd = Carbon::now()->subHours(13);

        $counter = 0;

        foreach ($log as $logs) {

            if (preg_match("/\\[(.*?)\\]/", $logs, $match)) {
                
                try {
                    $logTime = Carbon::parse($match[1]);
                } catch (\Carbon\Exceptions\InvalidFormatException $e) {
                    continue;
                }             

                    if ($logTime->between($logStart, $logEnd)) {
                        $counter++;
                    }
            }
        }

        $this->getOutput()->writeln("CRUD logged in last 13 hours: " . $counter);

    }
}
