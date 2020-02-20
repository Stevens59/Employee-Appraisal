<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;
use App\Http\Requests;

class AppriasalController extends Controller
{
    public function index()
    {
       
       // $employees = DB::select('select * from employees');
        $employees = DB::table('employees')->where('appriaser', Auth::user()->email)->get();
        return view('appriasal',['employees'=>$employees]);
    }
}
