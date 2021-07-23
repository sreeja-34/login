<?php 

session_start();

if (!isset($_SESSION['username'])) 
{
    header("Location: proj1.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
 </head>
 <style>
  body {
    width: 100%;
    min-height: 100vh;
    background-image: url("images/geet.jpg");
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
	margin-bottom:40px;
    align-items: center;
}

    h1{
        box-shadow:0 0 2px 2px rgba(0,0,0,0.3);
        border-radius:7px;
		font-color:white;
	
    }

 </style>
 
    <?php   echo "<h1> Hey !! Welcome " . $_SESSION['username'] . "</h1>"; ?>
 
 </html>