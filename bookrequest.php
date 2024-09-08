<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobileno'];
  $bookname = $_POST['bookname'];
  $authorname = $_POST['authorname'];
  $book = $_POST['book'];
  $books = $_POST['books'];
  

 
 
  
      $reg = mysqli_query($con," insert into request(name,email,mobileno,bookname,authorname,bookcategory,booktype) values ('$name','$email','$mobile','$bookname','$authorname','$book','$books')");
       
      if(!$reg)
      {
        echo" Response not recorded";
      }
      else
      {
      
      echo" Response recorded";
      
      }
    
  
?>
