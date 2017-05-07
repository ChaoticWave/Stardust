<?php namespace ChaoticWave\Stardust\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [];

    /**
     * Register the Closure based commands for the application.
     */
    protected function commands()
    {
        /** @noinspection PhpIncludeInspection */
        require base_path('routes/console.php');
    }
}
