 <?php
include_once(__DIR__."/mysql/connection.php");
$mess="";
$mess = $_GET["msg"];
if (isset($mess)){
  
  echo "$mess";
}

   ?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/fun.js"></script>>
<script type="text/javascript" src="js/jquery.min.js"></script>>
<script type="text/javascript" src="js/bootstrap.min.js"></script>>
</head>
<body>
 
  <?php
    //if (isset(var))
  ?>
<div >
<form action="dashboard.php" method="post" align='middle' id="form1">
  First name:
  <input type="text" name="fn" required><br><br>
  Last name:
  <input type="text" name="ln" required><br>
  Sex<br>
<input type="radio" name="sex" value="male" checked> Male<br>
  <input type="radio" name="sex" value="female"> Female<br>
  <input type="radio" name="sex" value="other"> Other<br>
  E-mail:
  <input type="email" name="email" required><br>
  Ph.No.<input type="number" name="ph"  required>
<br>


  






<button class="button button5 btn btn-success" type="submit" onclick="varification();">Create Account</button><br>
<button class="button button5 btn btn-warning">Continue As Guest</button>
</form>
  <button   onclick="varification();">var</button><br>


</div>
</body>
</html>