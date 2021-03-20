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


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $website = htmlspecialchars($_POST['website']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    

    
    

    $website = mysqli_real_escape_string($con,$website);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);
    
    

   

    

    $sql="INSERT INTO `credentials`(`website`, `username`,`password`) VALUES ('$website','$username','$password')";
    if (mysqli_query($con, $sql)) {

        header('Location: second.php');
        
    }
    else 
        echo "Error: " . $sql . "<br>" . mysqli_error($con);

}
else
    echo "You are not allowed to access this page";   
mysqli_close($con);


?>