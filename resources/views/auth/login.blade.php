<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	
		<!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title>Login</title>

		<!-- Bootstrap css-->
		<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="{{ asset('assets/plugins/web-fonts/icons.css') }}" rel="stylesheet"/>
		<link href="{{ asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet"/>

		<!-- Style css-->
		<link href="{{ asset('assets/css/style/style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/skins.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet">

		
		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/colors/color.css') }}">

		<!-- Switcher css-->
		<link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/switcher/demo.css') }}" rel="stylesheet">
		


	</head>

	<body class="main-body leftmenu">

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-5 pt-4 p-5 pos-absolute">
								
									<div class="clearfix"></div>
									<img src="{{ asset('assets/img/svgs/user.svg') }}" class="ht-200 mb-0" alt="user">
									<h5 class="mt-4 text-white">Signin to Your Account</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signin to approve, view and check sender transaction history</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											@if(session()->has('success'))
												<div class="alert alert-success" role="alert"  id='hide'>
													<button aria-label="Close" class="close" data-dismiss="alert" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
													<strong>Success!</strong>  {{ session()->get('success') }}
												</div>
											@endif
											@if(session()->has('error'))
												<div class="alert alert-danger mg-b-0" role="alert"  id='hide'>
													<button aria-label="Close" class="close" data-dismiss="alert" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
													<strong>Error!</strong> {{ session()->get('error') }}
												</div>
											@endif
											<img src="{{ asset('assets/img/brand/logo.png') }}" class=" header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											<form action="{{ route('login') }}" autocomplete="on" method="post" role="form" id="login_form">
                                                <!-- CSRF Token -->
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
												<h5 class="text-left mb-2">Welcome Admin</h5>
												<p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to approve, view and check sender transaction history</p>
												<div class="form-group text-left">
													<label>Email</label>
													<input class="form-control" placeholder="Enter your email" name="email" type="email" value="{!! old('email') !!}">
												</div>
												<div class="form-group text-left">
													<label>Password</label>
													<input class="form-control" placeholder="Enter your password" type="password" id="password" name="password">
												</div>
												<div class="col-sm-12 text-left">
													{!! $errors->first('email', '<span class="help-block text-danger text-left">:message</span>') !!}
												</div>
												<button type="submit" class="btn ripple btn-main-primary btn-block mt-5">Sign In</button>
											</form>
											<div class="text-left mt-2 ml-0">
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

		<!-- Jquery js-->
		<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

		<!-- Bootstrap js-->
		<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!-- Select2 js-->
		<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

		
		<!-- Custom js -->
		<script src="{{ asset('assets/js/custom.js') }}"></script>

		<!-- Switcher js -->
		<script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>
		

		<script>
			
			$(document).ready(function() {
			  $('#hide').fadeOut(5000); // 5 seconds x 1000 milisec = 5000 milisec
			});
			</script>

	</body>

</html>