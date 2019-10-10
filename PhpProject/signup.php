<!DOCTYPE html>
<html>
<head>
	<title>User Login And Registration</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<style type="text/css">
	
body { 
  padding-top: 10px; 
  font-family: Lato;
  background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(https://images.unsplash.com/photo-1461532257246-777de18cd58b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1055&q=80);
  /*background-position:center;*/
  background-size:cover;
   background-attachment: fixed;
  background-position: calc(100% - 20px) calc(100% - 10px);
  
}


.jumbotron {
      color: #2c3e50;
      background: #ecf0f1;
      height: 110px;
      
    }

.login-box{
	max-width: 700px;
	float:none;
	margin:150px auto;
	margin-left: 35%;
	margin-top: 25%;
}



.login-right{
	border:3px solid white;
	border-radius: 30px;
	background-color: white;
	padding:10px;
	margin-left: 55%;

}

/*.login-right{
	
	padding:10px;
}*/

.form-control{
	background-color:transparent !important;
}

#img1{
	
	margin-left: 1.5%;
	margin-top: -65px;
	height: 90px;
	width: 180px;
	padding-bottom: 20px;
}


</style>
<script type="text/javascript">
	function myfun(){
		alert("You are Registered Successfully");
	}
</script>
</head>

<body>

	<div class="container">
		<div class="jumbotron">
    		<h1><img src="https://icharity.in/wp-content/themes/maxstore/img/logo-trans.gif" id="img1"></h1>
  		</div>
  			
  			<span>
			<div class="login-box">
				<div class="row">
					

					
					<div class="col-md-6 login-right">
						<div><h2><b>SignUp</b></h2></div>
						<form action="registration.php" method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label>MobileNumber</label>
						<input type="text" name="phone" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary" onclick="myfun()">SignUp</button>
					</form>
					</div>

				</div>
			</div>
		</span>
	</div>

</body>
</html>