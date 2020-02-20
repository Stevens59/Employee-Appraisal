<?php

namespace App\Observers;

use App\Bestperform;
use App\Mail\appriasalsubmitted;
use Illuminate\Support\Facades\Mail;

class BestObserver
{
    /**
     * Handle the bestperform "created" event.
     *
     * @param  \App\Bestperform  $bestperform
     * @return void
     */
    public function created(Bestperform $bestperform)
    {
        Mail::to('stephen.waweru@fep-group.com')->send(new appriasalsubmitted());
    }

    /**
     * Handle the bestperform "updated" event.
     *
     * @param  \App\Bestperform  $bestperform
     * @return void
     */
    public function updated(Bestperform $bestperform)
    {
        //
    }

    /**
     * Handle the bestperform "deleted" event.
     *
     * @param  \App\Bestperform  $bestperform
     * @return void
     */
    public function deleted(Bestperform $bestperform)
    {
        //
    }

    /**
     * Handle the bestperform "restored" event.
     *
     * @param  \App\Bestperform  $bestperform
     * @return void
     */
    public function restored(Bestperform $bestperform)
    {
        //
    }

    /**
     * Handle the bestperform "force deleted" event.
     *
     * @param  \App\Bestperform  $bestperform
     * @return void
     */
    public function forceDeleted(Bestperform $bestperform)
    {
        //
    }
}
