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
		 echo $name;
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
</head>
<body>
	<ul>
    <li><a href="index.php">LOGO</a></li>
    <li style="float:right"><a class="active" onclick=<?php
    session_destroy()  ?> href="index.php">LogOut</a></li>
    
  </ul>

</body>
</html>