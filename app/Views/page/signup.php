<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Signup Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="<?php echo base_url('/assets/image/favicon.png')?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/animate/animate.css')?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/css-hamburgers/hamburgers.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/select2/select2.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/util-login.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/main-login.css')?>">
</head>	
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="/">Landing Page</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
					<a class="nav-link" href="/" target="_blank">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Menu
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Landing Page</a>
						<a class="dropdown-item active" href="#">Login/Signup</a>
						<a class="dropdown-item" href="#">Dashboard</a>
						<a class="dropdown-item" href="#">Contact Us</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('/assets/image/img-01.png')?>" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Create an account
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-50">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('/assets/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/vendor/select2/select2.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/vendor/tilt/tilt.jquery.min.js')?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?php echo base_url('/assets/js/main.js')?>"></script>

</body>
</html> 
