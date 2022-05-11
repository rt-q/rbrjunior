<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class newUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newUser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '4. Komenda dodająca użytkownika.';

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
        User::factory()->create();
    }
}
