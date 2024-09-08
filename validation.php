<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
 
 
  $email = $_POST['email'];
  $pass = $_POST['pass'];
 
  $s = " select * from customer where email = '$email' AND password = '$pass'";
  $result = mysqli_query($con,$s);
  $num = mysqli_num_rows($result);
  
  
  if($num == 1){
      header('location:home.php');
      
   }
  
  else
  {
      
     echo" password didnot match";
    
  }
?>
