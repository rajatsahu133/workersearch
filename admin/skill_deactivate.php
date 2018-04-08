<?php 
session_start();
if (!isset($_SESSION['adminlog'])){
	header ('location:index.php');
}
include 'mysql/connection.php';
 $sid=$_GET['sid'];
 if (!isset($_GET['sid'])){
	header ('location:skills.php');
}
 
 $sql="SELECT isactive FROM skill WHERE sid='".$sid."'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
	 //$isconfirmed=$row['is_confirmed'];
	 if($row['isactive']==0)
	 {
		$sql1="UPDATE skill SET isactive='1'  WHERE sid='".$sid."'"; 
		$result1 = $conn->query($sql1);
		header('location:skills.php');
	 }
	 else if($row['isactive']==1)
	 {
		 $sql1="UPDATE skill SET isactive='0'  WHERE sid='".$sid."'"; 
		$result1 = $conn->query($sql1);
		header('location:skills.php');
	 }
	 
 }
 }
 


?>