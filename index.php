 <?php
include_once(__DIR__."/mysql/connection.php");


   ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
</head>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<body >

  <ul>
    <li><a href="index.php">LOGO</a></li>
    <li style="float:right"><a class="active" href="LogIn.php">LogIn</a></li>
    <li style="float:right"><a  class="active" href="SignUp.php">SignUp</a></li>
  </ul>
  <form method="post" action="results.php">
  <br><br><br>Skill:
  <select id="skill" align="middle" name="skill">
    <option value="janitor">
      Janitor
    </option>
    <option value="painter">
      Painter
    </option>
    <option value="plumber">
      Plumber
    </option>
    <option value="repairman">
      Repairman
    </option>
    <option value="driver">
      Driver
    </option>
  </select><br>
    Pin:<input type="text" name="pin" id="pin"><br>
  <input type="submit" name="Search" value="Search">
    </form>

</body>
</html>