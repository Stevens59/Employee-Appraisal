<?php

namespace App\Observers;

use App\Businessfeedback;
use App\Mail\appriasalsubmitted;
use Illuminate\Support\Facades\Mail;

class BusinessObserver
{
    /**
     * Handle the businessfeedback "created" event.
     *
     * @param  \App\Businessfeedback  $businessfeedback
     * @return void
     */
    public function created(Businessfeedback $businessfeedback)
    {
        Mail::to('stephen.waweru@fep-group.com')->send(new appriasalsubmitted());
        
    }

    /**
     * Handle the businessfeedback "updated" event.
     *
     * @param  \App\Businessfeedback  $businessfeedback
     * @return void
     */
    public function updated(Businessfeedback $businessfeedback)
    {
        //
    }

    /**
     * Handle the businessfeedback "deleted" event.
     *
     * @param  \App\Businessfeedback  $businessfeedback
     * @return void
     */
    public function deleted(Businessfeedback $businessfeedback)
    {
        //
    }

    /**
     * Handle the businessfeedback "restored" event.
     *
     * @param  \App\Businessfeedback  $businessfeedback
     * @return void
     */
    public function restored(Businessfeedback $businessfeedback)
    {
        //
    }

    /**
     * Handle the businessfeedback "force deleted" event.
     *
     * @param  \App\Businessfeedback  $businessfeedback
     * @return void
     */
    public function forceDeleted(Businessfeedback $businessfeedback)
    {
        //
    }
}
