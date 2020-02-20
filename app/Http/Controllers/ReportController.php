<?php

namespace App\Http\Controllers;

use App\Exports\BestperformExport;
use App\Exports\BusinessFeedbackExport;
use App\Exports\DepartmentFeedbackExport;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller 
{
    public function export() 
    {
        return Excel::download(new BestperformExport, 'bestperform.xlsx');
    }

    public function exportbusiness() 
    {
        return Excel::download(new BusinessFeedbackExport, 'business.xlsx');
    }
    public function exportdepartment() 
    {
        return Excel::download(new DepartmentFeedbackExport, 'department.xlsx');
    }
    public function exportemployee() 
    {
        return Excel::download(new EmployeeExport, 'employee.xlsx');
    }
}