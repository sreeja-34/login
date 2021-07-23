

<?php
include('connection.php');
session_start();
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
	$sql="SELECT * FROM `table` WHERE `email`='$email' AND `password`='$password'";
	 $result=mysqli_query($conn,$sql);
	 if($result-> num_rows>0)
	 {
		 $row=mysqli_fetch_assoc($result);
		 $_SESSION['username']=$row['username'];
		 header("location:wcm.php");
	 }
	 else
	 {
		 echo"<script>alert('oops!!email or password is wrong')</script>";
    }
}

?>
<html>
<head>
<link rel="stylesheet" href="style2.css">
<title>login form</title>
</head>
<body style="background-image:url('images/who.jpg');opacity:0.9;background-size:cover;background-attachment:fixed;background-repeat:no-repeat;">

    <div class="container">
        <form action="" method="POST" class="login-email"style="margin-top:150px;background-color:#ccccff;margin-left:570px;">
            <p class="login-text" style="font-size: 2rem;color:#3366ff;text-align:center;font-weight:800;">Login</p>
          <div class="input-group">
           <input type="email" style="width:300px;height:40px;margin-left:10px;" placeholder="Email" name="email" required>
          </div>
           <div class="input-group">
            <input type="password" style="width:300px;height:40px;margin-left:10px;" placeholder="password" name="password" required>
        </div>
       <div  class="input-group">
           <button name="submit" class="btn" style="font-size: 2rem;background: linear-gradient(to bottom, #3366ff 0%, #ff3399 100%);">Login</button>
           </div>
           <p class="login-register-text">Don't have an account?<a href="register1.php">Register Here</a></p>
        </form>
    </div>
	
</body>
</html>

