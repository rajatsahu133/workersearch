 <?php
include_once(__DIR__."/mysql/connection.php");


   ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
</head>

<body >
  <img src="img/logo.png" float="right">
  <select id="sel" align="middle">
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
  <input type="text" name="Pin" id="pin"><br>
  <button onclick=alert(document.getElementById("sel").value);>Search</button>

</body>
</html>