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
  
 
  $s = " insert into comic(authorname,bookname,price,quantity,isbn,email) values ('$authorname','$bookname','$price','$quantity','$isbn','$email')";
   if(!mysqli_query($con,$s))
    {
  
     echo" Invalid insertion";
      
   }
  
  else
  {
      
    mysqli_query($con,$s);
    echo" Insertion successful";
    
  }
?>