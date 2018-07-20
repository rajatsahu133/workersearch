 <?php
include("mysql/connection.php");


   ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
</head>
 <!-- Author Bikash Sao -->
<script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body >

  <ul>
    <li><a href="index.php">LOGO</a></li>
    <li style="float:right"><a class="active" href="LogIn.php">LogIn</a></li>
    <li style="float:right"><a  class="active" href="SignUp.php">SignUp</a></li>
  </ul>
  <form action="results.php" method="post"  id="form" enctype="multipart/form-data" class="form-horizontal" style="font-size: 14px;">
  <div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Skill:</label>
              <div class="col-sm-6">
                <select id="skill" align="middle" required name="skill">
        <?php  

        $query1="SELECT * FROM skill WHERE isactive = '1' ORDER BY skill";
          $recresult=$conn->query($query1);
          if($recresult->num_rows>0)
          {
            while($recrow=$recresult->fetch_assoc())
              {?>

      
    <option value=<?php echo $recrow['skill'];?>>
     <?php echo $recrow['skill'];?>
     
    </option>
    <?php }
              }
              ?>
    
  </select></div><br>
            </div>
             <div class="form-group"> 
              <label class="control-label col-sm-2" for="title" style="font-size: 14px;">Address:</label>
              <div class="col-sm-6">
                <input type="text" name="pin" required placeholder="Enter your address" class="form-control" > </div><br>
            </div>
 <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="submit"   class="button button5 btn btn-success"  >
             </div>
            </div>
    </form>

</body>
</html>
