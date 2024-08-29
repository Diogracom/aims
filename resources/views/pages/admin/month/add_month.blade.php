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
                        <li class="breadcrumb-item active" aria-current="page">Add Month</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->
        <hr/>
        <div class="card">
            <div class="card-body p-3">
                <h5 class="mb-4">Add Month</h5>
                <form class="row g-3 pb-4" action="{{ route('add.month')}}" method='post'>
                    @csrf
                    <div class="col-md-6">
                        <label for="month_name" class="form-label">Month Name</label>
                        <input type="month" name='month_name'  placeholder="Month Name"   
                            class="form-control  @error('month_name') is-invalid @enderror">             
                        @error('month_name')
                            <p class="error"> {{ $message }} </p>
                        @enderror
                    </div>									
                    <div class="col-md-6">
                        <br>
                        <div class="d-md-flex d-grid align-items-center gap-3 pt-2">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>	
                            <button type="reset" class="btn btn-light px-4">Reset</button>										
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection