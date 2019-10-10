<!DOCTYPE html>
<html>
<head>
	<title>User Login And Registration</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="container">
		<div class="jumbotron">
    		<h1><img src="https://icharity.in/wp-content/themes/maxstore/img/logo-trans.gif" id="img1"></h1>
  		</div>
  			
  			<span>
			<div class="login-box">
				<div class="row">
					<div class="col-md-6 login-left" >
						<h2><b>Login</b></h2>
						<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
					<button type="submit" class="btn btn-default" style="float: right;"><a href="signup.php">SignUp</a></button>
					</form>
					</div>
					
					</form>
					</div>

				</div>
			</div>
		</span>
	</div>

</body>
</html>