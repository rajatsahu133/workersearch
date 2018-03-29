<?php  
include 'mysql/connection.php';
$uid="uid".rand(00001,99999);
if(isset($_POST['submit'])){

$image=rand(1000,1000000)."-".$_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
  $folder="img/user/";
  move_uploaded_file($file_loc,$folder.$image);


$sql="INSERT INTO user(fn,ln,gender,address,skill,email,mobile,image,uid,about,password)
VALUES('".$_POST['fn']."','".$_POST['ln']."','".$_POST['gender']."',
'".$_POST['address']."','".$_POST['skill']."','".$_POST['email']."',
'".$_POST['mob']."','$image','$uid','".$_POST['about']."','".$_POST['password']."')";
if(mysqli_query($conn, $sql)){  
 //echo "<br>Record inserted successfully.<br>"; 
  //header('location:SignUp.php?');
}else{  
echo "Could not insert record: <br>". mysqli_error($conn);  
}  

}





?>



<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
  <ul>
    <li><a href="index.php">LOGO</a></li>
    <li style="float:right"><a class="active" href="LogIn.php">LogIn</a></li>
    <li style="float:right"><a  class="active" href="SignUp.php">SignUp</a></li>
  </ul>
  <form action="SignUp.php" method="post"  id="form" enctype="multipart/form-data">

	First Name:<input type="text" name="fn" required placeholder="Enter first name">
	Last Name:<input type="text" name="ln" required placeholder="Enter last name"><br>
	Gender:<input type="text" name="gender" required placeholder="Enter gender"><br>
	Address:<input type="text" name="address" required placeholder="Enter address"><br>
	Skill: <select id="sel" align="middle" required name="skill">
    <option value="janitor">
      Janitor
    </option>
    <option value="painter">
      Painter
    </option>
    <option value="plumber">
      Plumber
    </option>
    <option value="repairman">
      Repairman
    </option>
    <option value="driver">
      Driver
    </option>
  </select><br>
  	Email:<input type="Email" name="email" required placeholder="Enter email"><br>
    Profile Photo:<br>
    <input type="file"  name="image" id="image"><br>
  	Mobile:<input type="text" name="mob" required placeholder="Enter Mobile number"><br>
    About:<input type="text" name="about" required placeholder="Write Somethimg about yourself"><br>
    <label for="password"> Password :</label>
    <input type="Password" name="password" id="password" placeholder="Enter a password" required=""><br>
    <label for="confirm_password">confirm Password :</label>
    <input type="Password" name="confirm_password" id="confirm_password" placeholder="Enter the same password" required=""><br>


  	<input type="submit" name="submit"   class="button button5 btn btn-success"  required>
    </form>
</body>
</html>
