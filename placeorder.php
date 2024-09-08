<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  $name = $_POST['username'];
  $email = $_POST['useremail'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $quantity = $_POST['quantity'];
  $isbn = $_POST['isbn'];

 
 
  
      $reg = " insert into placeorder (order_id,name,email,address,city,quantity,isbn) values('','$name','$email','$address','$city','$quantity','$isbn')";
       
     
      if(mysqli_query($con,$reg))
      {
      header('location:bill.php');
      $_SESSION["isbn"]= $isbn;
      $_SESSION["email"]= $email;
      }

      else{
        echo" Create account first!!";
      }
    
  
?>
