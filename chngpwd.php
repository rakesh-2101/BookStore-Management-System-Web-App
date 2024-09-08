<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  if(isset($_POST['Submit'])){
      $email=$_POST['useremail'];
      $opwd=$_POST['opwd'];
      $npwd=$_POST['npwd'];
      $cpwd=$_POST['cpwd'];

      $query = mysqli_query($con, "select email,password from customer where email = '$email' AND password = '$opwd'");
      $num = mysqli_fetch_array($query);

      if($num>0 && $cpwd == $npwd){
            
          $result = mysqli_query($con, " update customer set password= '$npwd' where email= '$email'");
          $_SESSION["msg1"] = "Password Change Successfully";
          
      }
      else {
          $_SESSION["msg1"] = "Password does not match";
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="chngpwd.css">
</head>
<body>
    <p style="color:red;"><?php echo $_SESSION["msg1"];?><?php  $_SESSION['msg1'] ="";?></p>
    <form name="chngpwd" action="" method="POST">
      <table align="center">
          <tr height="50">
              <td>EMAIL ID:</td>
              <td><input type="email" name="useremail" id="useremail"></td>
          </tr>
          <tr height="50">
              <td>Old Password:</td>
              <td><input type="password" name="opwd" id="opwd"></td>
          </tr>
          <tr height="50">
              <td>New Password:</td>
              <td><input type="password" name="npwd" id="npwd"></td>
          </tr>
          <tr height="50">
               <td>Confirm Password:</td>
               <td><input type="password" name="cpwd" id="cpwd"></td>
          </tr>
          <tr>
              <td><a href="customerlogin.html">Back to login Page</a></td>
              <td><input type="submit" style="color:red"; name="Submit" value="Change Password"></td>
          </tr>
      
      
        
          
     
        </table>
    </form>
</body>
</html>