<?php
// session_start();
// if (!isset($_SESSION['adminlog'])){
// 	header ('location:index.php');
// }
include '../connection.php';

$newsid="NEWS".rand(0001,9999);

if(isset($_POST['submit'])){


$sql = "INSERT INTO latest_news (news_id,content,added_by,location)VALUES ('$newsid','".$_POST['content']."','".$_POST['added_by']."','".$_POST['location']."' )";
if ($conn->query($sql) == TRUE) {
    header('location:latest_news.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}



?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Admin Panel</title>
	
	<?php include 'link.php';?>
</head>

<body>
	<div id="wrapper">
		
		<!-- Dropdown Structure -->

         <!--header -->
		<?php include 'header.php';?>
		<!--header -->
 
			<!--/. NAV TOP  -->
			<?php include 'leftnav.php';?>
			<!-- /. NAV SIDE  -->

			<div id="page-wrapper">
				<div class="header"> 
					<h1 class="page-header">
						New Course
					</h1>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#"> Others</a></li>
						<li class="active">New Latest News</li>
					</ol> 

				</div>
				<div id="page-inner">
					<form action="new_latest_news.php" method="post" enctype="multipart/form-data" class="form-horizontal" style="font-size: 14px;">
					 
                    <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">News ID:</label>
					    <div class="col-sm-6">
					      <input type="text" name="news_id" class="form-control"  value="<?php echo $catid;?>" readonly>
					    </div>
					  </div>

					 <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">News Content:</label>
					    <div class="col-sm-6">
					      <input type="text" name="content" class="form-control"  >
					    </div>
					  </div>
					  
					   <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Added By:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name="added_by" >
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Location:</label>
					    <div class="col-sm-6">
					      <input type="text" name="location" class="form-control"  >
					    </div>
					  </div>
								  
					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default green" name="submit">Submit</button>
					    </div>
					  </div>
					</form>


					


				<!-- /. ROW  -->
				<div class="fixed-action-btn horizontal click-to-toggle">
					<a class="btn-floating btn-large red">
						<i class="material-icons">menu</i>
					</a>
					<ul>
						<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
						<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
						<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
						<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
					</ul>
				</div>

				<footer><p>All right reserved. Template by: <a href="https://webthemez.com/admin-template/">WebThemez.com</a></p>


				</footer>
			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->
	


</body>

</html>