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
if(isset($_POST['submit']))
{
	if($_FILES["image"]["error"]) {
		$querry="UPDATE user SET fn='".$_POST['fn']."',ln='".$_POST['ln']."',gender='".$_POST['gender']."',address='".$_POST['address']."',skill='".$_POST['skill']."',email='".$_POST['email']."',mobile='".$_POST['mobile']."',about='".$_POST['about']."',password='".$_POST['password']."' WHERE uid='".$_POST['uid']."'";
	$result1 = $conn->query($querry);
	if($result1==TRUE)
	{
		header('location:view.php');
	}
	else{
		echo "fail";
	}
		
	}
	else{
	
	/*upload image*/
	
	$image = rand(1000,100000)."-".$_FILES['image']['name'];
  $file_loc = $_FILES['image']['tmp_name'];
  $folder="img/user/";
  move_uploaded_file($file_loc,$folder.$image);
	/*upload image*/
	
	
	$querry="UPDATE user SET fn='".$_POST['fn']."',ln='".$_POST['ln']."',gender='".$_POST['gender']."',address='".$_POST['address']."',skill='".$_POST['skill']."',email='".$_POST['email']."',mobile='".$_POST['mobile']."',about='".$_POST['about']."',password='".$_POST['password']."',image='$image' WHERE uid='".$_POST['uid']."'";
	$result1 = $conn->query($querry);
	if($result1==TRUE)
	{
		header('location:view.php');
	}
	else{
		echo "fail";
	}
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
					      <input type="text" name="fn" class="form-control"  value="<?php echo $recrow['fn'];?>" required>
					    </div><br>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Last Name:</label>
					    <div class="col-sm-6">
					      <input type="text" name="ln" class="form-control"  value="<?php echo $recrow['ln'];?>" required>
					    </div><br>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Gender:</label>
					    <div class="col-sm-6">
					      <input type="text" name="gender" class="form-control"  value="<?php echo $recrow['gender'];?>" required>
					    </div><br>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Address:</label>
					    <div class="col-sm-6">
					      <input type="text" name="address" class="form-control"  value="<?php echo $recrow['address'];?>" required>
					    </div><br>
					  </div>
			<div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Skill:</label>
              <div class="col-sm-6">
                <select id="skill" align="middle" required name="skill">
        <?php  

        $query1="SELECT * FROM skill WHERE isactive = '1' ORDER BY skill";
          $recresult=$conn->query($query1);
          if($recresult->num_rows>0)
          {
            while($recrow=$recresult->fetch_assoc())
              {?>

      
    <option value=<?php echo $recrow['skill'];?>>
     <?php echo $recrow['skill'];?>
     
    </option>
    <?php }
              }
              ?>
    
  </select></div><br>
            </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Email:</label>
					    <div class="col-sm-6">
					      <input type="email" name="email" class="form-control"  value="<?php echo $recrow['email'];?>" required>
					    </div><br>
					  </div>
					  <div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Mobile No.:</label>
              <div class="col-sm-6">
                <input type="text" name="mobile" required placeholder="Enter your mobile number" class="form-control" > </div><br>
            </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Password:</label>
					    <div class="col-sm-6">
					      <input type="text" name="password" class="form-control" id="password" value="<?php echo $recrow['password'];?>" required>
					    </div><br>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Confirm  Password:</label>
					    <div class="col-sm-6">
					      <input type="text" name="confirm_password" id="confirm_password" class="form-control"  value="<?php echo $recrow['password'];?>" required>
					    </div><br>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Image:</label>
					    <div class="col-sm-6">
						  <img style="width: 300px;" src="img/user/<?php echo $recrow['image']?>" onerror="this.src = 'images.jpg';" alt="image">
						  
					      <input type="file" class="form-control" name="image" id="image">
					    </div><br>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">About:</label>
					    <div class="col-sm-6">
					      <input type="text" name="about" id="about" class="form-control"  value="<?php echo $recrow['about'];?>" required>
					    </div><br>
					  </div>

					   <?php }}?>	
					   <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					  <input type="submit" name="submit"   class="button button5 btn btn-success"  >
					   </div>
					  </div>
					</form>


					
	


  		
</body>
</html>