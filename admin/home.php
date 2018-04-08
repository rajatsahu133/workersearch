<?php 
session_start();
if (!isset($_SESSION['adminlog'])){
	header ('location:index.php');
}
include 'mysql/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Admin Panel</title>
	
	<?php include 'link.php';?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
	
			<div class="header"> 
				<h1 class="page-header">
					Manage Users
				</h1>
	<div id="page-inner">

				<a class="waves-effect waves-light btn green" style="float: right;" href="skills.php">Add Or Remove Skill</a>
	<div class="row">
	        	<div class="col-md-12">
	        		<form enctype="multipart/form-data">
	        			<table id="stdcode" class="table table-striped table-bordered dataTable highlight centered bordered" cellspacing="0"  role="grid" aria-describedby="example_info" style="width: 100%;">
	        				<thead>
	        					<tr>
	        						<th>Sl No:</th>
	        						<th>User Id</th>
	        						<th>User Name</th>
	        						<th>Gender</th>
	        						<th>Address</th>
	        						<th>Skill</th>
	        						<th>Email</th>
	        						<th>Mobile</th>
	        						<th>About</th>
	        						<th>Profile Image</th>
	        						<th>Action</th>
	        					</tr>
	        				</thead>
	        				<?php 
	        				$sql="SELECT * FROM user ";
	        				$result = $conn->query($sql);

	        				?>
	        				<tbody>
	        					<?php $sn=1; foreach($result as $resultSet) { ?>
	        					<tr>
	        						<td><?= $sn ?></td>
	        						<td><?= $resultSet['uid'] ?></td>
	        						<td><?= $resultSet['fn']." ".$resultSet['ln'] ?></td>
	        						<td><?= $resultSet['gender'] ?></td>
	        						<td><?= $resultSet['address'] ?></td>
	        						<td><?= $resultSet['skill'] ?></td>
	        						<td><?= $resultSet['email'] ?></td>
	        						<td><?= $resultSet['mobile'] ?></td>
	        						<td><?= $resultSet['about'] ?></td>
	        						<td><img src="../img/user/<?php echo $resultSet['image'];?>"  alt="image" style="width:50px;"/></td>
	        						<td>
	        							
	        							<?php if($resultSet['isactive']==0){?>
	        							<div class="btn green" title="activate">
	        								<span><a href="deactivate.php?uid=<?php echo $resultSet['uid'];?>" onclick="return confirm('Are you sure to active this User?')"><i class="fa fa-check green" aria-hidden="true"></i></a></span>
	        							</div>
	        							<?php }else{?>
	        							
	        							<div class="btn red" style="padding: 0;" title="deactivate">
	        								<span><a href="deactivate.php?uid=<?php echo $resultSet['uid'];?>" onclick="return confirm('Are you sure to deactivate this User?')">
	        									
	        									<span class="fa-stack fa-lg">
	        										<i class="fa fa-check fa-stack-1x" style="color: #fff;font-size: 15px; z-index: 99;top: 10px;left: 11px;display: none;"></i>
	        										<i class="fa fa-ban fa-stack-2x text-danger" style="color: #fff;font-size: 18px;"></i>
	        									</span>
	        									
	        									
	        								</a></span>
	        							</div>
	        							<?php }?>
	        						</td>
											<!-- <td>
												<div class="btn orange" title="Edit">
									        <span><a href="edit-category.php?catid=<?php echo $resultSet['category_id'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a></span>
									      </div>
										  <?php if($resultSet['is_active']==0){?>
												<div class="btn green" title="Activate" onclick="return confirm('Are you sure to Activate this Category?')">
									        <span><a href="remove-category.php?catid=<?php echo $resultSet['category_id'];?>"><i class="fa fa-check green" aria-hidden="true"></i></a></span>
									      </div>
										  <?php }else{?>
										  
										  <div class="btn red" style="padding: 0;" title="Deactivate" onclick="return confirm('Are you sure to Deactivate this Category?')">
									        <span><a href="remove-category.php?catid=<?php echo $resultSet['category_id'];?>">
											<span class="fa-stack fa-lg">
                                                    <i class="fa fa-check fa-stack-1x" style="color: #fff;font-size: 15px; z-index: 99;top: 10px;left: 11px;display: none;"></i>
                                                     <i class="fa fa-ban fa-stack-2x text-danger" style="color: #fff;font-size: 18px;"></i>
                                            </span>
											
											
											</a></span>
									      </div>
										  <?php }?>
										</td> -->
									</tr>
									
									<?php $sn++; } ?>
									
								</tbody>
							</table>
						</form>
					</div>
				</div>	
			</div>
		</div>
	


				<script>
	$(function(){
		$('#stdcode').DataTable();
	});
</script>


</body>
</html>