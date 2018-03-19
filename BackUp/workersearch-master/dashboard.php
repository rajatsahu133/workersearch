  <?php 
include_once(__DIR__."/mysql/connection.php");
$fn = $_POST["fn"];
$ln  = $_POST["ln"];
$sex  = $_POST["sex"];
$email  = $_POST["email"];
$ph  = $_POST["ph"];

//echo $uname,"<br>",$pass;

$sql = "INSERT INTO user(fn,ln,sex,email,ph) 
VALUES ('$fn','$ln','$sex','$email','$ph')";  
if(mysqli_query($con, $sql)){  
 //echo "<br>Record inserted successfully.<br>"; 
	header('location:index.php?msg=Data added');
}else{  
echo "Could not insert record: <br>". mysqli_error($con);  
}  
?>