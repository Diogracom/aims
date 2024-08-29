@extends('pages.welcome')
@section('main_dashboard')
<div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Month</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('add.month')}}" class="btn btn-primary px-5">Add Month</a>
            </div>
        </div>
        <!--end breadcrumb-->
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Month Name</th>
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allMonths as $key=>$allmonth)                                
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $allmonth -> month_name}}</td>
                                    <td>{{ $allmonth -> created_at}}</td>   
                                    <td>
                                        <a href="{{route('edit.month',$allmonth->id )}}" class="btn btn-info px-2" >Update</a>
                                        <a href="{{route('delete.month', $allmonth->id )}}" class="btn btn-danger px-2" >Delete</a>
                                    </td>                             
                                </tr>  
                            @endforeach                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection