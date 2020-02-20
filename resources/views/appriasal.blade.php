@extends('voyager::master')
@section('page_header')

<h1 class="page-title">
            <i class="voyager-certificate"></i> Appraiser’s Feedback
        </h1>
@stop
@section('content')
<div class="page-content browse container-fluid">
<div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                   
                    <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                            
         <tr>
            <td>Employee</td>
           
         </tr>
         @foreach ($employees as $employee)
         <tr>
            <td>{{ $employee->employee }}</td>
            <td><a href="/admin/employees/{{$employee->id}}/edit" style="font-weight: bold">
            APPRIASE </a> </td>
            
         </tr>
         @endforeach
      </table>

              

</div>
</div>
</div>
</div>
@stop
