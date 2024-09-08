<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobileno'];
  $book = $_POST['book'];
  $books = $_POST['books'];
  $message = $_POST['message'];

 
 
  
      $reg = mysqli_query($con," insert into talk(name,email,mobileno,bookcategory,booktype,description) values ('$name','$email','$mobile','$book','$books','$message')");
       
      if(!$reg)
      {
        echo" Response not recorded";
      }
      else
      {
      
      echo" Response recorded";
      
      }
    
  
?>
