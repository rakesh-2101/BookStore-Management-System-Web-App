<?php  include 'connection.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <H1><b>Sign Up for Book House</b></H1>
    <h3>Please fill in this form to create an account</h3>
    <form action="customerlogin.php" method="POST" class="k">
       <p style="font-size:18px">
         <LABEL FOR="fname"><b>First Name:</b></LABEL>
         <INPUT TYPE="TEXT"  PLACEHOLDER="Name" REQUIRED NAME="fname" id="fname">
       </p>
        <p style="font-size:18px">
         <LABEL FOR="lname"><b>Last Name:</b></LABEL>
         <INPUT TYPE="TEXT" PLACEHOLDER="Name" REQUIRED NAME="lname" id="lname">   
       </p> 
       <p style="font-size:18px">
            <LABEL FOR="email"><b>Your Email:</b></LABEL>
            <INPUT TYPE="EMAIL" PLACEHOLDER="Email" REQUIRED NAME="email" id="email">
        </p>
        <p style="font-size:18px">
            <LABEL FOR="pass1"><b>Password:</b></LABEL>
            <INPUT TYPE="PASSWORD" PLACEHOLDER="Password" required name="pass1" id="pass1"> 
        </p>    
        <p style="font-size:18px">
            <LABEL FOR="pass2"><b>Repeat Password:</b></LABEL>
            <INPUT TYPE="PASSWORD" PLACEHOLDER="Repeat Password" required name="pass2" id="pass2">
        </p>
        <P style="font-size:18px">
            <LABEL FOR="mobile"><b>Mobile No:</b></LABEL>
            <INPUT type="tel" placeholder="Moblie No" required name="mobile" id="mobile">
        </P> 
        <P style="font-size:18px">
            <b>Gender:</b>
            <LABEL FOR="male">
            <INPUT TYPE="radio" required name="gender" value="male" id="male">Male</LABEL>
            <LABEL FOR="female">
            <INPUT TYPE="radio" required name="gender" value="female" id="female">Female</LABEL>  
        </P>
        <label style="font-size:18px">
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>
          
       <div >
           <button type="submit" class="signupbtn" value="Submit" name="enter">Sign Up</button>
       </div>


        <?php
       
            if(isset($_POST['enter'])){

              $firstname = $_POST['fname'];
              $lname = $_POST['lname'];
              $email = $_POST['email'];
              $pass1 = $_POST['pass1'];
              $pass2 = $_POST['pass2'];
              $mobile = $_POST['mobile'];
              $gender = $_POST['gender'];

                if($pass1 != $pass2){?>
                 <script>alert("Password didnot match")</script>
                 <?php
                }
                else{

                    $sql = "INSERT INTO register(id,firstname,lastname,email,password,mobileno,gender) VALUES('','$firstname','$lname','$email','$pass1','$mobile','$gender')";
                    $result = mysqli_query($conn,$sql);
                    if($result){?>
                        <script>alert("Registration successfull")</script>
                        <?php header('customerlogin.php');
                    
                    }
                    

                     
                }


                   
                    

                        
            





                   
            }
       
        ?>
    
    </form>


</body>
</html>