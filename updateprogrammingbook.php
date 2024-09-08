<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
 
 
  $authorname = $_POST['authorname'];
  $bookname = $_POST['bookname'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $isbn = $_POST['isbn'];
 
  
  
 
  $s = " update programming set authorname = '$authorname', bookname = '$bookname', price = $price,  quantity = $quantity where isbn = $isbn ";


   if(!mysqli_query($con,$s))
    {
  
     echo" Invalid Update";
      
   }
  
  else
  {
      
    mysqli_query($con,$s);
    echo" Updated successful";
    
  }
?>