<?php

namespace App\Jobs;

use App\Http\Controllers\ApiController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;


class CreateRandomPost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $request = Http::asForm()->post('http://localhost:8001/api/v1/posts', [
            'title' => 'Awesome Post #'.rand(1,1000),
            'content' => 'Day ' . rand(1,1000) . '. This is no a quality content ',
            'author' => rand(1,25)
        ]);

        $request;

    }
}
