<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
 
 
  $isbn = $_POST['isbn'];
  
  
 
  $s = " delete from book where isbn = $isbn";
   if(!mysqli_query($con,$s))
    {
  
     echo" Invalid Deletion";
      
   }
  
  else
  {
      
    mysqli_query($con,$s);
    echo" Removed successful";
    
  }
?>