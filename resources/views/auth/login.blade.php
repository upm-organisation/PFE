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
							<h1>Login</h1>
							<p class="account-subtitle">Access to our dashboard</p>
							<form action="{{route('login')}}" method="POST">
                                @csrf
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Email" name="email"> </div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Password" name="password"> </div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="text-center dont-have">Don’t have an account? <a href="{{route('register')}}">Register</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
