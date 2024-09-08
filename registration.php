<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];
  $mobile = $_POST['mobile'];
  $gender = $_POST['gender'];

 
  if($pass1 != $pass2){
      echo" Password didnot match";
      
   }
  
  else
  {
      $reg = mysqli_query($con," insert into customer(firstname,lastname,email,password,mobileno,gender) values ('$fname','$lname','$email','$pass1','$mobile','$gender')");
       
      if(!$reg)
      {
        echo" Email already used";
      }
      else
      {
      
      echo" Registration successful";
      header('location:customerlogin.html');
      
      }
    
  }
?>
