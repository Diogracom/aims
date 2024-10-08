@extends('layout')
@section('main')
<div class="wrapper">
	<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
		<div class="container">
			<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
				<div class="col mx-auto">
					<div class="card mb-0">
						<div class="card-body">
							<div class="p-4">
								<div class="mb-3 text-center">
									<img src="{{ asset('assets/images/logo-icon.png') }}" width="60" alt="" />
								</div>
								<div class="text-center mb-4">
									<h5 class="">Aims Admin</h5>
									<p class="mb-0">Please log in to your account</p>
								</div>
								<div class="form-body">
									<form class="row g-3" action="{{route('login')}}" method="post">
										@csrf
										<div class="col-12">
											<label for="username" class="form-label">Username</label>
											<input type="text" id="username" placeholder="Username"
											class="form-control  @error('username') is-invalid @enderror">             
											@error('username')
												<p class="error"> {{ $message }} </p>
											@enderror
										</div>
										<div class="col-12">
											<label for="password" class="form-label">Password</label>
											<div class="input-group" id="show_hide_password">
												<input type="password" class="form-control border-end-0" id="password" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
											</div>
										</div>
										<div class="col-12">
											<hr>
										</div>
										<div class="col-12">
											<div class="d-grid">
												<button type="submit" class="btn btn-primary">Sign in</button>
											</div>
										</div>
										
									</form>
								</div>
								

							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end row-->
		</div>
	</div>
</div>
@endsection
