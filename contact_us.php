<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobileno'];
  $message = $_POST['message'];

 
 
  
      $result = mysqli_query($con," insert into contact_us(name,email,mobileno,message) values ('$name','$email','$mobile','$message')");
    
         if($result)
       {
      
        
        echo" Response recorded";
      }
      else
      {
       
      echo" Response not recorded";
      
      
      }
    
  
?>
