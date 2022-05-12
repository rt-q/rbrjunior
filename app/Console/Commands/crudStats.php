<?php

namespace App\Console\Commands;

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
        $log = file(storage_path().'/logs/laravel.log');
        $actions = count(preg_grep("/posts/", $log))/2;
 
        $this->getOutput()->writeln("CRUD actions in log: " . $actions);
    }
}
