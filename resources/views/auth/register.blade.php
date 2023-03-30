@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="{{asset('admin/img/hotel_logo_without-bg.png')}}" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1 class="mb-3">Register</h1>
							<form action="{{route('register')}}" method="POST">
                                @csrf
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Name" name="name"> </div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Email" name="email"> </div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Password" name="password"> </div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation"> </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
								</div>
							</form>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>

							<div class="text-center dont-have">Already have an account? <a href="{{route('login')}}">Login</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
