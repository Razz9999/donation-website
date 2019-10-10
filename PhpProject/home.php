<?php 


session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="home.css">

 </head>
 <body>



 	<nav class="navbar navbar-inverse" style="background-color: #00264d;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">ICharity</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="children.php">Children</a></li>
      <li><a href="education.php">Education</a></li>
      <li><a href="women.php">Women</a></li>
      <li><a href="differentlyabled.php">Differently Abled</a></li>
      <li><a href="elderly.php">Elderly</a></li>
      <li><a href="health.php">Health</a></li>
      <li><a href="livelihood.php">Livelihoods</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">

      <li><a href="logout.php">LogOut</a></li>

    </ul>

  </div>
</nav>
  

    	
    	<div class="container">
    		<div class="row d-flex">
    			
    			<div class="col-md-6 col-lg-6">
    				<div class="row justify-content-start">
		          <div class="col-md-12 heading-section " id="intro">
		          	<span class="subheading"><h1><b>Welcome <?php echo $_SESSION['username']; ?></b></h1></span><br>
		            <h2 class="mb-4" style="font-size: 44px; text-transform: capitalize;"><h2>How <span>Could</span> You Help</h2></h2><br>
		            <h3>Give Donation</h3>
						<p><h4>Your regular donation will help us give people in India the interventions and protection they need, when they need it. Making a donation is quick and easy. We will keep your details securely and promise never to share them with anyone.</h4></p><br>
							<p><h4>The ICharity Promise
  All nonprofits listed on the platform are cleared for legal and compliance procedures. You can be assured that we make sure that they adhere to all the requirements as laid by the law.<br><br>

  We will bring you the most reliable giving options.<br><br>

  All non crowdfunding programs that we list have successfully cleared an exhaustive due diligence process covering legal, financial, and implementation aspects.<br><br>

  We will give you regular updates on the programs that you donate to.</h4></p>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
 </body>
</html>
