<?php 
session_start();
if (!isset($_SESSION['adminlog'])){
	header ('location:index.php');
}
include 'mysql/connection.php';
 $uid=$_GET['uid'];
 if (!isset($_GET['uid'])){
	header ('location:index.php');
}
 
 $sql="SELECT isactive FROM user WHERE uid='".$uid."'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
	 //$isconfirmed=$row['is_confirmed'];
	 if($row['isactive']==0)
	 {
		$sql1="UPDATE user SET isactive='1'  WHERE uid='".$uid."'"; 
		$result1 = $conn->query($sql1);
		header('location:home.php');
	 }
	 else if($row['isactive']==1)
	 {
		 $sql1="UPDATE user SET isactive='0'  WHERE uid='".$uid."'"; 
		$result1 = $conn->query($sql1);
		header('location:home.php');
	 }
	 
 }
 }
 


?>