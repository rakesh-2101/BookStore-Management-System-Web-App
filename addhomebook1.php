<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
 
  $authorname = $_POST['authorname'];
  $bookname = $_POST['bookname'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $isbn = $_POST['isbn'];
  $email = $_POST['email'];
  
 
  $s = mysqli_query($con," insert into book(authorname,bookname,price,quantity,isbn,email) values ('$authorname','$bookname','$price','$quantity','$isbn','$email')");
   if(!$s)
    {
  
     echo" Invalid insertion";
      
   }
  
  else
  {
      
    
    echo" Insertion successful";
    
  }
?>