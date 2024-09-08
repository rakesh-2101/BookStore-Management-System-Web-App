<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  ?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book House</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
     @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
     @import url('https://fonts.googleapis.com/icon?family=Material+Icons');
     
    </style>
</head>
<body>
    <h1 id="home">Book House</h1>
    <h4 id="sign"><a href="login1.html">Sign Up</a></h4>
    <h4 id="ad"><a href="adminlogin.html">Admin Login</a></h4><br>
    <form class="a">
         
         <button style='font-size:36px'><i id='person' class="material-icons"><a href="customerlogin.html">person</a></i></button>
         &nbsp; &nbsp;
         <form class="e">
         <p>
          <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-log-out"></span><a href="main.html">Log out</a>
          </button>
        </p>
        </form>
    </form>
    
    <div class="d">
      <button style='font-size:25px' style="margin:5px;" class="btn"> <a href="home.php">Home</a></button>
    <button style='font-size:25px' style="margin:5px;" class="btn"> <a href="aboutus.html">About Us</a></button>
    <div class="dropdown">
        <button style='font-size:25px' style="margin:5px;" class="btn" type="button" data-toggle="dropdown">Our Books
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><button style='font-size:18px'  class="btn"> <a href="astronomy.php">Astronomy</a></button></li>
          <li><button style='font-size:18px'  class="btn"> <a href="program.php">Programming</a></button></li>
          <li><button style='font-size:18px'  class="btn"> <a href="comic.php">Comic</a></button></li>
        </ul>
      </div>
      <button style='font-size:25px'  class="btn"> <a href="contact_us.html">Contact Us</a></button>
    </div><br><br><br><br><br><br><br><br><br>
    <div class="main">
      <div class="row">
        <div class="column nature">
          <div class="content">
            <img src="book1.jpg" alt="books" style="width:105%">
            <?php
               $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '7'");
               $row = mysqli_fetch_row($result);
             ?>
            <h5><?php echo $row[1]; ?></h5>
            <h5>by <?php echo $row[0]; ?></h5>
            <h5>ISBN NO:<?php echo $row[4]; ?></h5>
            <h5>Quantity:<?php echo $row[3]; ?></h5>
            <h4>INR.<?php echo $row[2]; ?></h4>
            <div class="b">
              <a href="placeorder.html"><INPUT TYPE="SUBMIT" value="Buy Now" ></a>
              
          </div>
          </div>
        </div>
        <div class="column nature">
          <div class="content">
          <img src="h2.jpg" alt="books" style="width:97%">
           <?php
               $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '799655'");
               $row = mysqli_fetch_row($result);
             ?>
            <h5><?php echo $row[1]; ?></h5>
            <h5>by <?php echo $row[0]; ?></h5>
            <h5>ISBN NO:<?php echo $row[4]; ?></h5>
            <h5>Quantity:<?php echo $row[3]; ?></h5>
            <h4>INR.<?php echo $row[2]; ?></h4>
            <div class="b">
              <a href="placeorder.html"><INPUT TYPE="SUBMIT" value="Buy Now" ></a>
               
          </div>
          </div>
        </div>
        <div class="column nature">
          <div class="content">
          <img src="book3.jpg" alt="books" style="width:105%">
          <?php
               $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '155665'");
               $row = mysqli_fetch_row($result);
             ?>
            <h5><?php echo $row[1]; ?></h5>
            <h5>by <?php echo $row[0]; ?></h5>
            <h5>ISBN NO:<?php echo $row[4]; ?></h5>
            <h5>Quantity:<?php echo $row[3]; ?></h5>
            <h4>INR.<?php echo $row[2]; ?></h4>
            <div class="b">
              <a href="placeorder.html"><INPUT TYPE="SUBMIT" value="Buy Now" ></a>
              
          </div>
          </div>
        </div>
        
        <div class="column cars">
          <div class="content">
            <img src="b1.jpg" alt="books" style="width:105%">
            <?php
               $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '4566666'");
               $row = mysqli_fetch_row($result);
             ?>
            <h5><?php echo $row[1]; ?></h5>
            <h5>by <?php echo $row[0]; ?></h5>
            <h5>ISBN NO:<?php echo $row[4]; ?></h5>
            <h5>Quantity:<?php echo $row[3]; ?></h5>
            <h4>INR.<?php echo $row[2]; ?></h4>
            <div class="b">
              <a href="placeorder.html"><INPUT TYPE="SUBMIT" value="Buy Now" ></a>
                
          </div>
          </div>
        </div>
        <div class="column nature">
          <div class="content">
          <img src="h5.jfif" alt="books" style="width:105%">
          <?php
               $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '126554959'");
               $row = mysqli_fetch_row($result);
             ?>
            <h5><?php echo $row[1]; ?></h5>
            <h5>by <?php echo $row[0]; ?></h5>
            <h5>ISBN NO:<?php echo $row[4]; ?></h5>
            <h5>Quantity:<?php echo $row[3]; ?></h5>
            <h4>INR.<?php echo $row[2]; ?></h4>
          </div>
          <div class="b">
          <a href="placeorder.html"><INPUT TYPE="SUBMIT" value="Buy Now" ></a>
            
          </div>
        </div>
        <div class="column nature">
          <div class="content">
          <img src="h6.jpg" alt="books" style="width:130%">
          <?php
               $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '3265959'");
               $row = mysqli_fetch_row($result);
             ?>
            <h5><?php echo $row[1]; ?></h5>
            <h5>by <?php echo $row[0]; ?></h5>
            <h5>ISBN NO:<?php echo $row[4]; ?></h5>
            <h5>Quantity:<?php echo $row[3]; ?></h5>
            <h4>INR.<?php echo $row[2]; ?></h4>
          </div>
          <div class="b">
            <a href="placeorder.html"><INPUT TYPE="SUBMIT" value="Buy Now" ></a>
          
          </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="pro">
          <h1>Want to promote your book</h1>
          <h4><u>We are here to help you</u></h4> 
          <p class="f">
            <button type="button" class="btn">
              <a href="talk.html">Let's Talk</a>
            </button>
          </p>
        </div><br><br>
        <div class="req">
          <h1>Don't find the books you are looking for??</h1>
          <p class="g">
            <button type="button" class="btn">
              <a href="bookrequest.html">Make an order request</a>
            </button>
          </p>
          <img src="conf.png" alt="Avatar" class="avatar">
        </div><br><br>
        <div class="feed">
          <h1>Want to share anything about the page with us</h1>
          <h4><u>Click the button and give us feedback</u></h4> 
          <p class="f">
            <button type="button" class="btn">
              <a href="feedbcak.html">Feedback</a>
            </button>
          </p>
        </div><br><br>

        
      <script>
        filterSelection("all")
        function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("column");
          if (c == "all") c = "";
          for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }
        
        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
          }
        }
        
        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
          }
          element.className = arr1.join(" ");
        }
        
        
        
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }
        </script>   
<div class="soc">
  <h2>Connect with Us</h2>
  <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
  <a href="https://twitter.com/" class="fa fa-twitter"></a>
  <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
  <h3 id="con">"Book House:Learn Something New"<br>
            <p>"All we have to decide is what to do with the time that is given us."</p>
  </h3>
  </div>

    
   <div class="footer">
      <a href="contact_us.html">Contact Us</a>&nbsp;|
      <a href="aboutus.html">About Us</a><br>
      Developed by Karan and Rakesh<br>
      COPYRIGHT © 2020 ALL RIGHTS RESERVED.
   </div>         
</body>
</html>