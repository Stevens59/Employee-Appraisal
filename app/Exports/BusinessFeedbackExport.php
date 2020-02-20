<?php

namespace App\Exports;

use App\Businessfeedback;
use Maatwebsite\Excel\Concerns\FromCollection;

class BusinessFeedbackExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Businessfeedback::all();
    }
}
