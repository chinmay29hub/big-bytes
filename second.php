<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
  header('Location: index.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<title>Big Bytes</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  
</script> 
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
  scroll-behavior: smooth;
}


.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("team/mac.gif");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
.w3-container {
  
  
  
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php#home" class="w3-bar-item w3-button w3-wide">BIG-BYTES</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php#about" class="w3-bar-item w3-button"><i class = "fa fa-info"></i>ABOUT</a>
      <a href="index.php#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <!--<a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>-->
      
      <a href="index.php#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="#add" class="w3-bar-item w3-button"><i class="fa fa-plus"></i>ADD</a>
      <a href="#saved" class="w3-bar-item w3-button"><i class="fa fa-floppy-o"></i>SAVED</a>
      <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out "></i>LOGOUT</a>
      
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php#about" onclick="w3_close()" class="w3-bar-item w3-button"><i class = "fa fa-info"></i>ABOUT</a>
  <a href="index.php#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <!--<a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>-->
  <!--<a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>-->
  <a href="index.php#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="#add" onclick="w3_close()"  class="w3-bar-item w3-button"><i class="fa fa-plus"></i>ADD</a>
  <a href="#saved" onclick="w3_close()"  class="w3-bar-item w3-button"><i class="fa fa-floppy-o"></i>SAVED</a>
  <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out "></i>LOGOUT</a>
</nav>

 <div class="w3-row-padding" id="add">
    <div class="w3-center w3-padding-64">
      <h3>Save Passwords</h3>
      <p>The Simplest Password Manager</p>
    </div>

    <hr>

<div class="w3-container w3-teal w3-black">
  <h2>Save a Credential</h2>
</div>
<form class="w3-container w3-card-4 " action="authenticate_3.php" method="post" autocomplete="off">

<br>
<p>      
<label class="w3-text-grey">Website</label>
<input class="w3-input w3-border w3-animate-input" type="text" name="website" id="website" style="width:40%;" placeholder="Enter Website" required></p>
</p>
<p>      
<label class="w3-text-grey">Username</label>
<input class="w3-input w3-border w3-animate-input" type="text" name="username" id="username" style="width:40%;" placeholder="Enter username" required></p>
</p>
<p>      
<label class="w3-text-grey">Password</label>
<input class="w3-input w3-border w3-animate-input" type="password" name="password" id="password" style="width:40%;" placeholder="Enter Password" required></p>
</p>
<br>
  
  <p><button type="submit" class="w3-btn w3-padding w3-teal w3-black" style="width:120px">SAVE &nbsp; &#10095;</button></p>
</form>
<hr>
  </div>


<div class="w3-row-padding" id="saved">
    <div class="w3-center w3-padding-64">
      
    </div>

    <hr>

<div class="w3-container w3-teal w3-black">
  <h2>Your Saved Credentials</h2>
</div>
<form class="w3-container w3-card-4">
<br>
<div class="w3-container">


<div class="w3-responsive">
<table class="w3-table-all  w3-hoverable">
<tr>
  <th class="w3-center">Website</th>
  <th class="w3-center">Username</th>
  <th class="w3-center">Password</th>
  
 
  
  
</tr>
<tr>
  <td class="w3-center">
    <?php  
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'big_bytes';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
  // If there is an error with the connection, stop the script and display the error.
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT website FROM credentials';
 $result = mysqli_query($con, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["website"];
    echo "<br>";
    echo "<br>";
  }
}
?>
  </td>
  <td class="w3-center">
    
    <?php  
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'big_bytes';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
  // If there is an error with the connection, stop the script and display the error.
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT username FROM credentials';
 $result = mysqli_query($con, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["username"];
    echo "<br>";
    echo "<br>";
  }
}
?>
  </td>
  <td class="w3-center">
    
    <?php  
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'big_bytes';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
  // If there is an error with the connection, stop the script and display the error.
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT password FROM credentials';
 $result = mysqli_query($con, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["password"];
    echo "<br>";
    echo "<br>";
  }
}
?>
  </td>
  
  
  
  
</tr>

</table>
</div>
</div>
<br>
</form>
</div>
<br>
<br>



</body>
</html>


