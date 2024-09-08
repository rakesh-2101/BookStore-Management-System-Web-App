<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Workspace</title>
    <link rel="stylesheet" href="adp1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
     @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
     @import url('https://fonts.googleapis.com/icon?family=Material+Icons');
     
     table, th, td{
         border: 1px solid black;
         border-collapse: collapse;
     }
      th, td{
          padding: 15px;
          text-align: left;
      }
      #t01{
          width: 100%;
          background-color: #f1f1c1;
      }
      #l{
          padding: 25px;
      }
    </style>
</head>
<body>
    <div class="d">
      <div class="dropdown">
          <button style='font-size:25px' style="margin:5px;" class="btn" type="button" data-toggle="dropdown">Add Books
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
             <li><a href="addbookhome.php">Add in home</a></li>
            
          </ul>
        </div>
    <div class="dropdown">
            <button style='font-size:25px' style="margin:5px;" class="btn" type="button" data-toggle="dropdown">Remove Books
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a href="removehomebook.php">Remove from Home</a></li>
                
            </ul>
    </div>
        <div class="dropdown">
            <button style='font-size:25px' style="margin:5px;" class="btn" type="button" data-toggle="dropdown">Update Books
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a href="updatebook.html">Update in Home</a></li> 

            </ul>
        </div>
    </div>
    <div id="l">&nbsp;
           <a href="home.php">Back to home Page</a>&nbsp;
           <a href="adminlogin.html">Back to login Page</a>&nbsp;
          <a href="adminregister.html">Back to signup Page</a>
     </div><br><br><br><br>

       



     


     <table id="t01">
        <h2>Books Details</h2>

      <tr>
          <th>Author Name</th>
          <th>Book Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Isbn No</th>
          <th>Email</th>
        </tr>

        <?php
             session_start();
  
              $con = mysqli_connect('localhost','root','',);
               mysqli_select_db($con,'project');
  

 
              $records = mysqli_query($con,"select * from book");
     
               while($data = mysqli_fetch_array($records))
               {
                ?>
                   
                   <tr>
                      <td><?php echo $data['authorname']; ?></td>
                      <td><?php echo $data['bookname']; ?></td>
                      <td><?php echo $data['price']; ?></td>
                      <td><?php echo $data['quantity']; ?></td>
                      <td><?php echo $data['isbn']; ?></td>
                      <td><?php echo $data['email']; ?></td>
                    </tr>
                <?php
               }
            ?>
      
            </table>
  
       

</body>
</html>