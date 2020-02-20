<?php

namespace App\Listeners;

use App\Events\AppriasalSubmitted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendSubmittedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AppriasalSubmitted  $event
     * @return void
     */
    public function handle(AppriasalSubmitted $event)
    {
        $event->order->user->notify(new SendInvoiceNotification($event->order));
    }
}
