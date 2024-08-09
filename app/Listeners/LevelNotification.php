<?php

namespace App\Listeners;

use App\Events\App\Events\LevelCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LevelNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LevelCreated $event): void
    {
        //  
    }
}
