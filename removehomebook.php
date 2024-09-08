
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove  Book</title>
    <link rel="stylesheet" href="adp.css">
</head>
<body>
    
    <div class="t">
       <H1><b><u>REMOVE BOOK</u></b></H1> 
        <form action="removehome.php" class="P" method="POST">
          
           
            <P>
                <LABEL FOR="isbn">ISBN:</LABEL><br>
                <INPUT TYPE="number" PLACEHOLDER="isbn" REQUIRED NAME="isbn" id="isbn">
            </P>
          
            <p>
                <button type="submit" >Remove</button>
                <td><a href="home.php">Back to home Page</a></td>
                
            </P>
        </form>
    </div>
</body>
</html>

