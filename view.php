<?php  
session_start();
include 'mysql/connection.php';
$uid=$_SESSION["uid"];
$sql="SELECT * FROM user WHERE uid='$uid'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
	while($recrow = $result->fetch_assoc()) {
		$name=$recrow['fn']." ".$recrow['ln'];
		// echo $name;
		}
}



?>





<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<link rel="stylesheet" href="css/stylesheet.css">
	  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <style type="text/css">
    #form label{float: left;width: 140px}
    #error_msg{color: red;font-weight: bold;}





  </style>
  <script type="text/javascript">
      $(document).ready(function () {

        var $submitBtn=$("form input[type='submit']");
        var $passwordBox=$("#password");
        var $confirmBox=$("#confirm_password");
        var $errorMsg=$('<span id="error_msg">Passwords dont Match.</span>');
        $submitBtn.removeAttr("disabled");

        function checkMatchingPasswords(){
          if($confirmBox.val() !="" && $passwordBox.val !=""){
            if($confirmBox.val() != $passwordBox.val() ){
              $submitBtn.attr("disabled","disabled");
              $errorMsg.insertAfter($confirmBox);
            }
          }
        }
        function resetPasswordError(){
          $submitBtn.removeAttr("disabled");
          var $errorCont =$("#error_msg");
          if($errorCont.length >0){
            $errorCont.remove();
          }
        }
        $("#confirm_password, #password")
            .on("keydown",function(e){
              if(e.keyCode==13||e.keyCode==9){
                checkMatchingPasswords();
              }
            })
            .on("blur", function(){
              checkMatchingPasswords();
            })
            .on("focus",function(){
              resetPasswordError();
            })





      });
      </script>

</head>
<body>
	<ul>
    <li><a href="index.php">LOGO</a></li>
    <li style="float:right"><a class="active" onclick=<?php
    //session_destroy()  ?> href="logout.php">LogOut</a></li>
    
  </ul>
  		<?php  

  			$sql="SELECT * FROM user WHERE uid='$uid'";
			$result = $conn->query($sql); 
			if ($result->num_rows > 0)
				{
					while($recrow = $result->fetch_assoc()) 
					{?>
			<div id="page-inner">
					<form action="edit.php" method="post" enctype="multipart/form-data" class="form-horizontal" style="font-size: 14px;" id="form">
			<div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">User ID:</label>
					    <div class="col-sm-6">
					      <input type="text" name="uid" class="form-control"  value="<?php echo $recrow['uid'];?>" readonly>
					    </div><br>
					  </div>
					 <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">First Name:</label>
					    <div class="col-sm-6">
					      <input type="text" name="fn" class="form-control"  value="<?php echo $recrow['fn'];?>" required readonly>
					    </div><br>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Last Name:</label>
					    <div class="col-sm-6">
					      <input type="text" name="ln" class="form-control"  value="<?php echo $recrow['ln'];?>" required readonly>
					    </div><br>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Gender:</label>
					    <div class="col-sm-6">
					      <input type="text" name="gender" class="form-control"  value="<?php echo $recrow['gender'];?>" required readonly>
					    </div><br>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Address:</label>
					    <div class="col-sm-6">
					      <input type="text" name="address" class="form-control"  value="<?php echo $recrow['address'];?>" required readonly>
					    </div><br>
					  </div><div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Skill:</label>
					    <div class="col-sm-6">
					    	<input type="text" name="skill" class="form-control"  value="<?php echo $recrow['skill'];?>" required readonly>
					    </div><br>
					  </div>
					      
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Email:</label>
					    <div class="col-sm-6">
					      <input type="email" name="email" class="form-control"  value="<?php echo $recrow['email'];?>" required readonly>
					    </div><br>
					  </div>
					  <div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Mobile No.:</label>
              <div class="col-sm-6">
                <input type="text" name="mobile" value="<?php echo $recrow['mobile'];?>" required readonly class="form-control" > </div><br>
            </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Password:</label>
					    <div class="col-sm-6">
					      <input type="text" name="password" class="form-control" id="password" value="<?php echo $recrow['password'];?>" required readonly>
					    </div><br>
					  </div>
					 
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Image:</label>
					    <div class="col-sm-6">
						  <img style="width: 300px;" src="img/user/<?php echo $recrow['image']?>" onerror="this.src = 'images.jpg';" alt="image">
						  
					      
					    </div><br>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">About:</label>
					    <div class="col-sm-6">
					      <input type="text" name="about" id="about" class="form-control"  value="<?php echo $recrow['about'];?>" required readonly>
					    </div><br>
					  </div>

					   <?php }}?>	
					   <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					   <a href="edit.php">
					   <button type="button" class="btn btn-info" >Edit Profile</button></a>
					   </div>
					  </div>
					</form>


					
	


  		
</body>
</html>