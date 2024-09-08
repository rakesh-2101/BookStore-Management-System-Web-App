<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  
  $result = mysqli_query($con, " select * from bill where email= '{$_SESSION["email"]}' ");
  $row = mysqli_fetch_row($result);

  $result1 = mysqli_query($con, " select * from book where isbn = {$_SESSION["isbn"]} ");
  $row1 = mysqli_fetch_row($result1);
  

  
 ?>

  
  
   








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link rel="stylesheet" href="bill.css">
</head>
<body>
    
    <div class="t">
       <H1><b><u>BILL</u></b></H1> 
     
       
       


        <form action=" "class="P">
                <LABEL FOR="billno">Bill No: <?php echo $row[0]; ?></LABEL><br>
                
            <P>
                <LABEL FOR="name">CUSTOMER NAME: <?php echo $row[1]; ?></LABEL><br>
                
            </P> 
            <P>
                <LABEL FOR="email">EMAIL: <?php echo $row[2]; ?></LABEL><br>
                
            </P>
            <P>
                <LABEL FOR="quantity">QUANTITY: <?php echo $row[3] ?></LABEL><br>
               
            </P>
            <P>
                <LABEL FOR="address">DELIVERY ADDRESS: <?php echo $row[4]; ?></LABEL><br>
               
            </P>
            <P>
                <LABEL FOR="city">CITY: <?php echo $row[5]; ?></LABEL> 
               
            </P>
            <P>
                <LABEL FOR="authorname">AUTHOR NAME: <?php echo $row1[0]; ?></LABEL> 
               
            </P>
            <P>
                <LABEL FOR="bookname">BOOK NAME: <?php echo $row1[1]; ?></LABEL> 
               
            </P>
           
            <P>
                <LABEL FOR="isbn">ISBN NO: <?php echo $_SESSION["isbn"]; ?></LABEL> 
               
            </P>
            <P>
                <LABEL FOR="payable">PAYABLE AMOUNT: <?php echo $row1[2]*$row[3]; ?></LABEL> 
               
            </P> 
            <P>
                <button onClick="myFunction()">PAY NOW</button>
                
                <script>
                    function myFunction() {
                       alert("Transcation Successful");
                          
                   }
                    
                </script>
            </P>
            
        </form>
    </div>
</body>
</html>