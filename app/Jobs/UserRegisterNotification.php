<?php

namespace App\Jobs;

use App\Events\UserRegisterNotification as EventsUserRegisterNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UserRegisterNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $model ;
    /**
     * Create a new job instance.
     */
    public function __construct($model)
    {
        $this->model = $model;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        event(new EventsUserRegisterNotification($this->model));
    }
}
