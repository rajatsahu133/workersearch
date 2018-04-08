<?php 
//session_start();
if (!isset($_SESSION['adminlog'])){
	header ('location:index.php');
}
include 'mysql/connection.php';
$sid="sid".rand(00001,99999);
if(isset($_POST['submit'])){




$sql="INSERT INTO skill(sid,skill)
VALUES('$sid','".$_POST['skill']."')";
if(mysqli_query($conn, $sql)){  
 //echo "<br>Record inserted successfully.<br>"; 
  //header('location:view.php?');
}else{  
echo "Could not insert record: <br>". mysqli_error($conn);  
}  

}







?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Skill</title>
	<?php include 'link.php';?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

	<form action="skills.php" method="post"  id="form" enctype="multipart/form-data" class="form-horizontal" style="font-size: 14px;">


	<div class="form-group">
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">SkillTo Be Added:</label>
              <div class="col-sm-6">
                <input type="text" name="skill" required placeholder="Enter Skill" class="form-control">
                </div><br>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="submit"   class="button button5 btn btn-success"  >
             </div>
            </div>
    </form>

</body>
</html>
