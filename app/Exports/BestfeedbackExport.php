<?php

namespace App\Exports;

use App\Bestfeedback;
use Maatwebsite\Excel\Concerns\FromCollection;

class BestfeedbackExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bestfeedback::all();
    }
}
