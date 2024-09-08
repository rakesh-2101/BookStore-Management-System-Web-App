<?php
  session_start();
  
  $conn = mysqli_connect('localhost','root','',);
  mysqli_select_db($conn,'house');
 
  $name = $_POST['x'];
  $email = $_POST['y'];
  $password = $_POST['z'];
 
  $s = " insert into signup(signup_id,username,emai_id,password) values('','$name','$email','$password')";
 mysqli_query($conn,$s);
 echo"registeration successfull";
 ?>
 <html>
<head>
	<title>sign in and sign up form</title>
	<link rel="stylesheet" href="home">
</head>
<body>
	


<form id="sign_up"class="input-group" method="POST" action="">
	<input type="text" class="input-field" placeholder="Username" required name="x" id="x">
	<input type="email" class="input-field" placeholder="Email" required name="y" id="y">
	<input type="password" class="input-field" placeholder="Password" required name="z" id="z">
	<input type="checkbox" class="check-box"><span>I agree to terms & conditions</span>
	<button type="submit" class="submit-btn">Sign up</button>
</form>


</body>
</html>