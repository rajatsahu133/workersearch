<?php 

session_start();
  include 'mysql/connection.php';

  if(isset($_POST['submit']))
  {

  $email = $_POST['email'];
  $password  = $_POST["password"];
  $query="SELECT * FROM user WHERE email = '$email' AND password ='$password'";
  $recresult=$conn->query($query);
 if($recresult->num_rows > 0){
    while ($recrow=$recresult->fetch_assoc()) {
    
 $_SESSION["uid"]=$recrow['uid'];
 //$url = "edit.php?uid=".$uid;
 //echo $uid;
 header('location: edit.php');
}

}
}
 ?>







<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <link rel="stylesheet" href="css/stylesheet.css">
	  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <ul>
    <li><a href="index.php">LOGO</a></li>
    <li style="float:right"><a class="active" href="LogIn.php">LogIn</a></li>
    <li style="float:right"><a  class="active" href="SignUp.php">SignUp</a></li>
  </ul>
	<div >	
	<form class="form-horizontal" role="form" action="login.php" method="post"  id="form" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="submit"   class="button button5 btn btn-success"  id="submit" required>
    </div>
  </div>
</form>
</body>
</html>>