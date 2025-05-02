<?php


namespace App\Services;

use App\Events\SubmissionEvent;
use App\Jobs\ProcessSubmission;


class SubmitService
{

    public function store(array $data): void
    {
        ProcessSubmission::dispatch($data);
        event(new SubmissionEvent($data));
    }
}
