
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<script>
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

<div class="container" style="padding-top: 40px;">

  <form action="paymentregister.php" method="post">
<div style="margin-left:30%;margin-top: 10%;">
    <div class="thumbnail" style="width: 50%;border:1px solid #00264d; ">
          <a href="atm.php"><h4><b>Credit / Debit / ATM Card</b></h4></a>
     </div>
     <div class="thumbnail" style="width: 50%;border:1px solid #00264d;">
          <a href="paytm.php"><h4><b>Paytm</b></h4></a>
     </div>
</div>
    <!--  <div class="thumbnail">
          <a href="net.php"><h4><b>Net Banking</b></h4></a>
     </div> -->
    

    <!-- <div class="form-group"> -->
      <!-- <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required="">
    </div>
    <div class="form-group">
      <label for="phone">Mobile Number:</label>
      <input type="tel" class="form-control" id="phone" placeholder="Enter MobileNumber" name="phone" required="">
    </div>
    <div class="form-group">
      <label for="amount">Amount:</label>
      <input type="number" class="form-control" id="amount" placeholder="" name="amount" required="">
    </div> -->

    <!-- <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div> -->
  <!--   <button type="submit" class="btn btn-primary" >Donate</button> -->
  </form>
</div>

</body> 
</html>

