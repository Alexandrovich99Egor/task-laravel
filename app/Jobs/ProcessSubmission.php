<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use App\Models\Submission;

class ProcessSubmission implements ShouldQueue
{
    use Queueable;


    /**
     * Create a new job instance.
     */
    public function __construct(public array $data)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        Submission::create($this->data);
    }
}
