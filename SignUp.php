<?php  
session_start();
include 'mysql/connection.php';
$uid="uid".rand(00001,99999);
if(isset($_POST['submit'])){
$_SESSION["uid"]=$uid;
$image=rand(1000,1000000)."-".$_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
  $folder="img/user/";
  move_uploaded_file($file_loc,$folder.$image);


$sql="INSERT INTO user(fn,ln,gender,address,skill,email,mobile,image,uid,about,password)
VALUES('".$_POST['fn']."','".$_POST['ln']."','".$_POST['gender']."',
'".$_POST['address']."','".$_POST['skill']."','".$_POST['email']."',
'".$_POST['mobile']."','$image','$uid','".$_POST['about']."','".$_POST['password']."')";
if(mysqli_query($conn, $sql)){  
 //echo "<br>Record inserted successfully.<br>"; 
  header('location:view.php?');
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
  <form action="SignUp.php" method="post"  id="form" enctype="multipart/form-data" class="form-horizontal" style="font-size: 14px;">


	<div class="form-group">
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">First Name:</label>
              <div class="col-sm-6">
                <input type="text" name="fn" required placeholder="Enter first name" class="form-control">
                </div><br>
            </div>
	<div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Last Name:</label>
              <div class="col-sm-6">
                <input type="text" name="ln" required placeholder="Enter last name" class="form-control" > </div><br>
            </div>
	<div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Gender:</label>
              <div class="col-sm-6">
                <input type="text" name="gender" required placeholder="Enter your gender" class="form-control" > </div><br>
            </div>
	<div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Address:</label>
              <div class="col-sm-6">
                <input type="text" name="address" required placeholder="Enter your address" class="form-control" > </div><br>
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
                <input type="email" name="email" required placeholder="Enter your email address" class="form-control" > </div><br>
            </div>
    <div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Profile Photo:</label>
              <div class="col-sm-6">
    <input type="file"  name="image" id="image" required="true"></div><br></div>
  	<div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Mobile No.:</label>
              <div class="col-sm-6">
                <input type="text" name="mobile" required placeholder="Enter your mobile number" class="form-control" > </div><br>
            </div>
    <div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">About:</label>
              <div class="col-sm-6">
                <input type="text" name="about" required placeholder="Write Something about you" class="form-control" > </div><br>
            </div>
    <div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Password:</label>
              <div class="col-sm-6">
                <input type="password" id="password" name="password" required placeholder="Enter password" class="form-control" > </div><br>
            </div>
    <div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Confirm Password:</label>
              <div class="col-sm-6">
                <input type="password" id="confirm_password" name="confirm_password" required placeholder="Again Enter password" class="form-control" > </div><br>
            </div>


  	 <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="submit"   class="button button5 btn btn-success"  >
             </div>
            </div>
    </form>
</body>
</html>
