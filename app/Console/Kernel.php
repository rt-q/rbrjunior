<?php

namespace App\Console;

use App\Jobs\CreateRandomPost;
use App\Jobs\YesComment;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;



class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $filePath=storage_path().'/logs/schedule.log';

        $schedule->job(new CreateRandomPost)->daily()->appendOutputTo($filePath);

        $schedule->job(new YesComment)->cron('0 0,3,6,9,12,15,18,21 * * *')->appendOutputTo($filePath);
        $schedule->job(new YesComment)->cron('36 0,3,6,9,12,15,18,21 * * *')->appendOutputTo($filePath);
        $schedule->job(new YesComment)->cron('12 1,4,7,10,13,16,19,22 * * *')->appendOutputTo($filePath);
        $schedule->job(new YesComment)->cron('48 1,4,7,10,13,16,19,22 * * *')->appendOutputTo($filePath);
        $schedule->job(new YesComment)->cron('24 2,5,8,11,14,17,20,23 * * *')->appendOutputTo($filePath);
        /*

        00:00
        00:36
        01:12
        01:48
        02:24

        03:00
        03:36
        04:12
        04:48
        05:24
        
        06:00
        06:36
        07:12
        07:48
        08:24
        
        09:00
        09:36
        10:12
        10:48
        11:24
        
        12:00
        12:36
        13:12
        13:48
        14:24

        15:00
        15:36
        16:12
        16:48
        17:24

        18:00
        18:36
        19:12
        19:48
        20:24

        21:00
        21:36
        22:12
        22:48
        23:24
        
        +---------+-------------------------------+---------------------------+----------------------------+
        |         | 0 0 * * *                     | App\Jobs\CreateRandomPost | 2022-05-13 00:00:00 +00:00 |
        |         | 0 0,3,6,9,12,15,18,21 * * *   | App\Jobs\YesComment       | 2022-05-12 21:00:00 +00:00 |
        |         | 36 0,3,6,9,12,15,18,21 * * *  | App\Jobs\YesComment       | 2022-05-12 21:36:00 +00:00 |
        |         | 12 1,4,7,10,13,16,19,22 * * * | App\Jobs\YesComment       | 2022-05-12 22:12:00 +00:00 |
        |         | 48 1,4,7,10,13,16,19,22 * * * | App\Jobs\YesComment       | 2022-05-12 19:48:00 +00:00 |
        |         | 24 2,5,8,11,14,17,20,23 * * * | App\Jobs\YesComment       | 2022-05-12 20:24:00 +00:00 |
        +---------+-------------------------------+---------------------------+----------------------------+
        
        */
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
