<?php

namespace App\Listeners;

use App\Events\SubmissionEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Submissions
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
    public function handle(SubmissionEvent $event): void
    {
        //
    }
}
