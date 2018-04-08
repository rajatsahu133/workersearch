<?php
session_start();
include 'mysql/connection.php';
if(isset($_POST['submit']))
{
	$sql = "SELECT aid,apassword FROM admin";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$uname = $row ['aid'];
		$pass = $row ['apassword'];
	}
	}
	if ($uname == $_POST['Username'] && $pass== $_POST['Password']){
		$_SESSION['adminlog']= $uname;
		header('location:home.php');

	}else{
		$mer = 1;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="welcome">
    <meta name="keyword" content="">
    <title>Admin Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style_login.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="index.php" method="post" enctype="multipart/form-data">
			  <?php
				if(isset($mer))
				{
			  ?>
				<div style="color:#F00; font-size:12px; padding:5px;">
			  <?php
				echo "Invalid Credentials";
			  ?>
				</div>
			  <?php
				}
              ?>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="Username" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" class="form-control" name="Password" placeholder="Password">
		            <label class="checkbox">
					<!--
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span>
					-->
		            </label>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit" name="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
					<!--
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                    Create an account
		                </a>
		            </div>
					-->
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
							  <form class="form-login" action="forgotpassword" method="post" enctype="multipart/form-data">
							  <?php
								if(isset($wr))
								{
									?>
									<div style="color:#F00">
									<?php
									if($wr==1)
									{
									echo "Wrong Details";
									}
									else
									{
									echo "Check Your Mail to Reset Password";
									}
									?>
									</div>
									<?php
								}
              				  ?>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
							  </form>
		                  </div>
		              </div>
		          </div>
		      </form>	  	
	  	
	  	</div>
	  </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>
  </body>
</html>
