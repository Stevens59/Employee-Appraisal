<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\BusinessObserver;
use App\Observers\BestObserver;
use App\Observers\DepartmentObserver;
use App\Observers\EmployeeObserver;

Use App\Businessfeedback;
Use App\Bestperform;
Use App\Employee;
Use App\Departmentfeedback;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
        Businessfeedback::observe(BusinessObserver::class);
        Departmentfeedback::observe(DepartmentObserver::class);
        Bestperform::observe(BestObserver::class);
        Employee::observe(EmployeeObserver::class);
    }
}
