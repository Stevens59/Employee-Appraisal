<?php

namespace App\Observers;

use App\Departmentfeedback;
use App\Mail\appriasalsubmitted;
use Illuminate\Support\Facades\Mail;

class DepartmentObserver
{
    /**
     * Handle the departmentfeedback "created" event.
     *
     * @param  \App\Departmentfeedback  $departmentfeedback
     * @return void
     */
    public function created(Departmentfeedback $departmentfeedback)
    {
        Mail::to('stephen.waweru@fep-group.com')->send(new appriasalsubmitted());
    }

    /**
     * Handle the departmentfeedback "updated" event.
     *
     * @param  \App\Departmentfeedback  $departmentfeedback
     * @return void
     */
    public function updated(Departmentfeedback $departmentfeedback)
    {
        //
    }

    /**
     * Handle the departmentfeedback "deleted" event.
     *
     * @param  \App\Departmentfeedback  $departmentfeedback
     * @return void
     */
    public function deleted(Departmentfeedback $departmentfeedback)
    {
        //
    }

    /**
     * Handle the departmentfeedback "restored" event.
     *
     * @param  \App\Departmentfeedback  $departmentfeedback
     * @return void
     */
    public function restored(Departmentfeedback $departmentfeedback)
    {
        //
    }

    /**
     * Handle the departmentfeedback "force deleted" event.
     *
     * @param  \App\Departmentfeedback  $departmentfeedback
     * @return void
     */
    public function forceDeleted(Departmentfeedback $departmentfeedback)
    {
        //
    }
}
