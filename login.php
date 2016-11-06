<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="utf-8">
		<title>People</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="libs/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="libs/bootstrap-datepicker/datepicker.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		<script src="libs/jquery-2.1.4.min.js"></script>
		<script src="libs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
				<div class="row logo">
					<a href="index.php">
						<img src="imgs/logo.png" class="img-responsive" alt="Responsive image">
					</a>
				</div>
				<div class="row header">
				</div>
				<div class="row content">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="panel panel-login">
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">
											<form id="login-form" action="#" method="post" role="form" style="display: block;">
												<div class="form-group">
													<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
												</div>
												<div class="form-group">
													<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-sm-6">
															<input type="button" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-lg btn-primary btn-login" value="Log In">
														</div>
														<div class="col-sm-6">
															<button class="form-control btn btn-lg btn-info" id="register-form-link">Register</button>
														</div>
													</div>
												</div>
											</form>
											<form id="register-form" action="#" method="post" role="form" style="display: none;">
												<div class="form-group">
													<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
												</div>
												<div class="form-group">
													<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
												</div>
												<div class="form-group">
													<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
												</div>
												<div class="form-group">
													<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-sm-6">
															<input type="button" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-lg btn-primary btn-register" value="Register Now">
														</div>
														<div class="col-sm-6">
															<button class="form-control btn btn-lg btn-info" id="login-form-link">Login</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row footer ">
				</div>
				<div class="row copyright">
					COPYRIGHT © WILL NEED NAME INSERTING HERE
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(function() {

		    $('#login-form-link').click(function(e) {
				$("#login-form").delay(100).fadeIn(100);
		 		$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
			$('#register-form-link').click(function(e) {
				$("#register-form").delay(100).fadeIn(100);
		 		$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
			$('#login-submit').click(function () {
				window.open('admin.php', '_self');
			});
			$('#register-submit').click(function () {
				window.open('login.php', '_self');
			});
		});

	</script>
</html>

