<?php  
	include 'mysql/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
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
          $query1="SELECT fn,ln,gender,address,skill,email,mobile FROM user WHERE address = '$pin' AND skill ='$skill'";
          $recresult=$conn->query($query1);
          if($recresult->num_rows>0)
          {
            while($recrow=$recresult->fetch_assoc())
              {?>
          		<div data-aos="flip-left" class="cell-sm-8 cell-md-4 card" style="margin-bottom: 30px; padding-top: 15px; padding-bottom: 10px;">
                  <article class="post-news"><a class="thumbnail-default" >
                    <figure><img class="img-responsive" style="height: 220px;" width="370" height="270" src="img/logo.png" alt=""></figure>
                    <span class="icon icon-xxs fa-link"></span></a>
                    <div class="offset-top-10">
                      <h5 class="text-primary text-bold"><a class="post-news-title" ><!-- Improving on Strategic Sourcing -->
                      	tatti_title
                      </a></h5>
                    </div>
                    <div class="offset-top-15">
                      <div class="post-meta"><!-- <span class="icon icon-xxs fa-calendar text-gray text-middle"></span> -->
                        <!-- <time class="text-gray inset-left-5 text-middle" datetime="2016-01-01">26 January 2016, 15:34</time> -->
                      </div>
                    </div>
                    <div style="height: 100px;overflow: hidden; text-align: justify;position: relative;">
                      <p><!-- There is an organizational expectation that transportation modes will be sourced and cost will be taken out of the network with some regularity. --><?php echo $recrow['fn'];?></p>
                      <p><!-- There is an organizational expectation that transportation modes will be sourced and cost will be taken out of the network with some regularity. --><?php echo $recrow['ln'];?></p>

                      
                    </div>
                  </article>
                </div>
                <?php }
              }
              ?>
             </div>
		
	</main>

</body>
</html>