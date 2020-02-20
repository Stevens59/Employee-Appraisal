<?php

namespace App\Exports;

use App\Departmentfeedback;
use Maatwebsite\Excel\Concerns\FromCollection;

class DepartmentFeedbackExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Departmentfeedback::all();
    }
}
