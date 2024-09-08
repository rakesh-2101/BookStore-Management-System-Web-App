<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  $adminname = $_POST['adminname'];
  
  $email = $_POST['email'];
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];
 

 
  if($pass1 != $pass2){
      echo" Password didnot match";
      
   }
  
  else
  {
      $reg = mysqli_query($con,"call adminregisterprocedure('$adminname','$email','$pass1')");
      if(!$reg)
       {
         echo" Email already used";
       }

      else
      {
       mysqli_query($con,$reg);
       echo" Registration successful";
       header('location:adminlogin.html');
      }
    
  }
?>
