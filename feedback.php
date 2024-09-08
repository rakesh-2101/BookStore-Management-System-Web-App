<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobileno'];
  $message = $_POST['message'];

 
 
  
      $reg = mysqli_query($con,"call feedbackprocedure('$name','$email','$mobile','$message')");
       
      if(!$reg)
      {
        echo" Response not recorded";
      }
      else
      {
      
      echo" Response recorded";
      
      }
    
  
?>
