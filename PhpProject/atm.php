
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
  function done(){
    alert("Donation Successful");
  }
</script>
<style type="text/css">
  .container{
  width: 500px;
  margin-left: 33%;
  border:2px solid #00264d;
  border-radius: 20px;
  margin-top: 6%;
  

  
  }
form{
  display: flex;
  flex-direction:column;
  justify-content: center;
  /*background-color: #ffd9b3;*/
  /*width: 50%;*/
  margin-bottom: 15px;
  border-radius: 12px;

}



</style>
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

  <form action="atmregister.php" method="post">
    <div class="form-group">
      <label for="name" style="margin-top: 1%;">Card Number:</label>
      <input type="text" class="form-control" id="cardnumber" placeholder="Enter Cardnumber" name="cardnumber" required>
    </div>
    <div class="form-group">
      <label for="expiry">Expiry:</label>
      <input type="number" class="form-control" id="month" placeholder="Month" name="month" required>
      <input type="number" class="form-control" id="year" placeholder="Year" name="year" required style="margin-top: .5%;">
    </div>
     <div class="form-group">
      <label for="cvv">CVV:</label>
      <input type="number" class="form-control" id="cvv" placeholder="Enter CVV" name="cvv" required>
    </div>

   <!--  <div class="form-group">
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
    <button type="submit" class="btn btn-default" onclick="done()" style="background: #00264d;color: white;">Submit</button>
  </form>
</div>

</body> 
</html>

