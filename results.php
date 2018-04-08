<?php  
	include 'mysql/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
  <style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: normal;
    height:  normal;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 2px 16px;
}
</style>
</head>
	<style type="text/css">
    .card:hover{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      transform: scale(1.02, 1.02);
    }

  </style>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Hind:400,300,700%7CMontserrat:400,700">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<body>
	<main class="page-content">
    <!-- Latest news-->
    <section class="section-70 section-md-90">
      <div class="shell">
        <div class="range text-sm-left range-xs-center">
          <?php 
          $skill = $_POST["skill"];
			$pin  = $_POST["pin"];
          $query1="SELECT * FROM user WHERE address = '$pin' AND skill ='$skill' AND isactive = '1'";
          $recresult=$conn->query($query1);
          if($recresult->num_rows>0)
          {
            while($recrow=$recresult->fetch_assoc())
              {?>
          		<div  class="col-md-3 col-sm-6 col-lg-2 col-xs-12"  >
                <div class="card">
                <a href="detail.php?uid=<?php echo $recrow['uid'];?>"  target="_self">
                  <div style="min-height: 215px;">
                    
                  
                    <img  src="img/user/<?php echo $recrow['image'];?>" alt="Avatar" style="width:100%" >
                  </div>  

                        <div class="col-md-12" style="position: relative;">

                             <h4><b><?php  $name=$recrow['fn']." ".$recrow['ln']; ?><?php  echo $name?></b></h4>
                               <p>About:<?php echo substr(($recrow['about']),0,7)?></p>
                               <div style="position: absolute;    right: 0px;">
                                 See more
                               </div>
                           </div></a>
                  </div>         
                </div>
                <?php }
              }
              ?>
             </div>
     </div>  
     </section>    
		
	</main>

</body>
</html>