<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  ?>







<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic</title>
    <link rel="stylesheet" href="comic.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
     @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
     @import url('https://fonts.googleapis.com/icon?family=Material+Icons');
     
    </style>
</head>
<body>
    <h1 id="home">Comic</h1>
    <br><br>
    <div class="main">
        <div class="row">
            <div class="column nature">
                <div class="content">
                <img src="c1.jpg" alt="books" style="width:100%">
                <?php
                    $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '71'");
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
            <img src="c2.jpg" alt="books" style="width:85%">
                  <?php
                    $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '72'");
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
              <img src="c3.jpg" alt="books" style="width:100%">
              <?php
                    $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '73'");
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
              <img src="c4.jpg" alt="books" style="width:105%">
              <?php
                    $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '74'");
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
              <img src="c5.jpg" alt="books" style="width:105%">
              <?php
                    $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '75'");
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
              <img src="t1.jpg" alt="books" style="width:112%">
              <?php
                    $result = mysqli_query($con, " select authorname,bookname,price,quantity,isbn from book where isbn = '76'");
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
          
      </div>
      
      
        </div>
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
          
  </body>
  </html>