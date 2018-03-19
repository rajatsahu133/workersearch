<?php  
include 'mysql/connection.php';
$uid="uid".rand(00001,99999);
if(isset($_POST['submit'])){

$image=rand(1000,1000000)."-".$_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
  $folder="../img/user/";
  move_uploaded_file($file_loc,$folder.$image);


$sql="INSERT INTO user(fn,ln,gender,address,skill,email,mobile,image,uid)
VALUES('".$_POST['fn']."','".$_POST['ln']."','".$_POST['gender']."',
'".$_POST['address']."','".$_POST['skill']."','".$_POST['email']."',
'".$_POST['mob']."','$image','$uid')";
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
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <form action="SignUp.php" method="post"  id="form1">
	First Name:<input type="text" name="fn" required>
	Last Name:<input type="text" name="ln" required><br>
	Gender:<input type="text" name="gender" required><br>
	Address:<input type="text" name="address" required><br>
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
  	Email:<input type="Email" name="email" required><br>
    Profile Photo:<br>
    <input type="file"  name="image" id="image"><br>
  	Mobile:<input type="text" name="mob" required><br>
  	<input type="submit" name="submit"   class="button button5 btn btn-success"  required>
    </form>
</body>
</html>
