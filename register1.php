 <?php
include('connection.php');
if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $confirmpassword =$_POST['confirmpassword'];
if($password==$confirmpassword)
{
 $sql="INSERT INTO `table`(username,email,password)
        VALUE('$username','$email','$password')";
        $result= mysqli_query($conn,$sql);
        if($result){
            echo"<script>alert('sucessfully registered')</script>";
        }
		     
    else{
        echo"<script>alert('password is not matched')</script>";
        }
}
}
 ?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewreport"content="width=device-width,initial-scale=1.0">


<link rel="stylesheet" href="style1.css">
<title>register form</title>

</head>
<body style="background-image:url('images/who.jpg');opacity:0.9;background-size:cover;background-attachment:fixed;background-repeat:no-repeat;">
    
    <div class="container">
        <form class="login-email" method="POST" action="" style="
    background: linear-gradient(to bottom, #ffffff 0%, #ffffff 100%);margin-left:550px;height:470px;margin-top:80px;border:aliceblue;">
            <p class="login-text"style="font-size: 2rem;font-weight:900;text-align:center">Register</p>
           <div class="input-group">
		   <input type="text"style="width:300px;margin-left:15px;border:2px solid black;height:40px"placeholder="username"name="username"required>
		   </div>
		   <div class="input-group">
           <input type="email"style="width:300px;margin-left:15px;border:2px solid black;height:40px"placeholder="Email"name="email" required>
           </div>
         <div class="input-group">
            <input type="password"style="width:300px;margin-left:15px;border:2px solid black;height:40px"placeholder="password"name="password" required>
     </div>
		<div class="input-group">
            <input type="password"style="width:300px;margin-left:15px;border:2px solid black;height:40px"placeholder="confirm password"name="confirmpassword" required>
        </div>
      <div class="input-group">
           <button class="btn" type="submit" name="submit" style="display:block;
		   font-size:30px;
width:80%;
border:none;
 background: linear-gradient(to left, #66ffff 0%, #6600cc 100%);
padding: 14px 28px;
margin-left:30px;


text-align:center;">Register</button>
		   </div>
		   <div class="input-group">
		   <p class="don" style="font-size:23px;margin-top:0px;">Already have an Account?<a href="proj1.php">Login</a></p>
        </div>
        </form>
    </div>
</body>
</html>

