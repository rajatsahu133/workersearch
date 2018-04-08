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
	<title>Skills</title>
		<?php include 'link.php';?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

	<div class="header"> 
				<h1 class="page-header">
					Skills
				</h1>
	</div>
	<?php  include 'addskill.php';?>
	<div id="page-inner">

	<div class="row">
	        	<div class="col-md-12">
	        		<form enctype="multipart/form-data">
	        			<table id="stdcode" class="table table-striped table-bordered dataTable highlight centered bordered" cellspacing="0"  role="grid" aria-describedby="example_info" style="width: 100%;">
	        				<thead>
	        					<tr>
	        						<th>Sl No:</th>
	        						<th>Skill Id</th>
	        						<th>Skill Name</th>
	        						<th>Action</th>
	        					</tr>
	        				</thead>
	        				<?php 
	        				$sql="SELECT * FROM skill ORDER BY skill";
	        				$result = $conn->query($sql);

	        				?>
	        				<tbody>
	        					<?php $sn=1; foreach($result as $resultSet) { ?>
	        					<tr>
	        						<td><?= $sn ?></td>
	        						<td><?= $resultSet['sid'] ?></td>
	        						<td><?= $resultSet['skill'] ?></td>
	        						<td>
	        							
	        							<?php if($resultSet['isactive']==0){?>
	        							<div class="btn green" title="activate">
	        								<span><a href="skill_deactivate.php?sid=<?php echo $resultSet['sid'];?>" onclick="return confirm('Are you sure to active this User?')"><i class="fa fa-check green" aria-hidden="true"></i></a></span>
	        							</div>
	        							<?php }else{?>
	        							
	        							<div class="btn red" style="padding: 0;" title="deactivate">
	        								<span><a href="skill_deactivate.php?sid=<?php echo $resultSet['sid'];?>" onclick="return confirm('Are you sure to deactivate this Skill?')">
	        									
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