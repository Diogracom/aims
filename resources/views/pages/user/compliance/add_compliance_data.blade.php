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
                        <li class="breadcrumb-item active" aria-current="page">Compliance</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->
        <hr/>
        <div class="card">
			<div class="card-body p-4">
				<h5 class="mb-4">Add Data</h5>
				<form class="row g-3" action="{{route('register.subcategory')}}" method="post">
					@csrf

					<div class="col-md-6">
					<label for=" category_id" class="form-label">Category</label>
					<input type="text" name="subcategory_name" id="subcategory_name" class="form-control @error('subcategory_name')	is-invalid 									
						@enderror" placeholder="SubCategory Name"> 
					@error('category_id')
						<p class="error">{{ $message }}</p>
					@enderror
				</div>
				
					<div class="col-md-6">
						<label for="subcategory_name" class="form-label">SubCategory Name</label>
						<input type="text" name="subcategory_name" id="subcategory_name" class="form-control @error('subcategory_name')	is-invalid 									
						@enderror" placeholder="SubCategory Name">                                      
							@error('subcategory_name')
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