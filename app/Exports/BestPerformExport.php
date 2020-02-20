<?php

namespace App\Exports;

use App\Bestperform;
use Maatwebsite\Excel\Concerns\FromCollection;

class BestPerformExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bestperform::all();
    }
}
