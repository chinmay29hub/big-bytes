<!DOCTYPE html>
<html>
<title>Big Bytes - Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
	
	<div class="w3-half w3-display-middle" >
<div class="w3-card-4  w3-margin">
<div class="w3-container w3-blue">
  <h2>Login</h2>
</div>    
<form class="w3-container" action="authenticate.php" method="post">
<p>
<input class="w3-input" type="text" name="username" id="username" style="width:90%" required>
<label>Username</label></p>
<p>      
<input class="w3-input" type="password" name="password" id="password" style="width:90%" required>
<label>Password</label></p>


<p><center><button type="submit" value="submit" class="w3-button w3-black w3-round-xxlarge">Login</button></center></p>
<center><a href="register.php">Sign Up?</a></center>
<br>

</form>
</div>
</div>

</body>
</html>
