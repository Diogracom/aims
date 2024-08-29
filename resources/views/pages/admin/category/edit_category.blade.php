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
                        <li class="breadcrumb-item active" aria-current="page">Update Category</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->
        <hr/>
        <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Update Category</h5>
            <form class="row g-3" action="{{route('update.category')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$category->id}}" >
                <div class="col-md-6">
                <label for="department_id" class="form-label">Department</label>
                <select name="department_id" id="department_id" class="form-select @error('department_id') is-invalid @enderror">
                    <option value="" disabled>Select a department...</option>
                    @foreach ($department as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $category->department_id ? 'selected' : '' }}>{{$item->department_name}}</option>
                    @endforeach
                </select>
                @error('department_id')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            
                <div class="col-md-6">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" name="category_name" id="category_name" class="form-control @error('category_name')	is-invalid 									
                    @enderror" placeholder="Category Name" value="{{$category->category_name}}">                                      
                        @error('category_name')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>									
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                        <button type="reset" class="btn btn-light px-4">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>

@endsection