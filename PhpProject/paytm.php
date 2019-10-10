
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="donate.css">
</head>
<script type="text/javascript">
  function done(){
    alert("Donation Successful");
  }
</script>

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

  <form action="paytmregister.php" method="post">
    <div class="form-group">
      <label for="name" style="margin-top: 1%;">Mobile Number:</label>
      <input type="text" class="form-control" id="number" placeholder="Enter MobileNumber" name="phone" required="">
    </div>
    <div class="form-group">
      <label for="otp">Enter OTP:</label>
      <input type="text" class="form-control" id="otp" placeholder="Enter OTP" name="otp" required="">
    </div>

   
    <button type="submit" class="btn btn-default" onclick="done()" style="background: #00264d;color: white;">Donate</button>
  </form>
</div>

</body> 
</html>

