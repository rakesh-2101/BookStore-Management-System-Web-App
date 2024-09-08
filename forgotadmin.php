<?php
  session_start();
  
  $con = mysqli_connect('localhost','root','',);
  mysqli_select_db($con,'project');
  if(isset($_POST['Submit'])){
      $email=$_POST['email'];
    
      $npwd=$_POST['npwd'];
      $cpwd=$_POST['cpwd'];

      $query = mysqli_query($con, "select email,password from adminregister where email = '$email'");
      $num = mysqli_fetch_array($query);

      if($num>0 && $cpwd == $npwd){
            
          $result = mysqli_query($con, " update adminregister set password= '$npwd' where email= '$email'");
          $_SESSION['msg1'] = "Password Change Successfully";
          
      }
      else {
          $_SESSION['msg1'] = "Password does not match";
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgotadmin.css">
</head>
<body>
    <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php  $_SESSION['msg1'] ="";?></p>
    <form name="chngpwd" action="" method="POST">
      <table align="center">
          <tr height="50">
              <td>EMAIL ID:</td>
              <td><input type="email" name="email" id="email"></td>
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
              <td><a style="color:red" href="adminlogin.html">Back to login Page</a></td>
              <td><input type="submit" name="Submit" value="Change Password"></td>
          </tr>
      
      
        
          
     
        </table>
    </form>
</body>
</html>