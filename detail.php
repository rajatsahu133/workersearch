<?php 

include 'mysql/connection.php';
$uid=$_GET['uid'];


$sql="SELECT * FROM  user WHERE uid='$uid' ";
$result=$conn->query($sql);

if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    $name=$row['fn']." ".$row['ln'];
    $gender=$row['gender'];
    $address=$row['address'];
    $skill=$row['skill'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $image=$row['image'];
  }
}

echo $name;




 ?>