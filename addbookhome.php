
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add in home</title>
    <link rel="stylesheet" href="adp.css">
</head>
<body>
    
    <div class="t">
       <H1><b><u>ADD BOOK</u></b></H1> 
        <form action="addhomebook1.php" class="P" method="POST">
            <P>
                <LABEL FOR="authorname">AUTHOR NAME:</LABEL><br>
                <INPUT TYPE="TEXT" PLACEHOLDER="Name" REQUIRED NAME="authorname" id="NAME">
            </P>
            <P>
                <LABEL FOR="bookname">BOOK NAME:</LABEL><br>
                <INPUT TYPE="TEXT" PLACEHOLDER="Book Name" REQUIRED NAME="bookname" id="Book Name">
            </P>
            <P>
                <LABEL FOR="price">PRICE:</LABEL><br>
                <INPUT TYPE="number" PLACEHOLDER="Price" REQUIRED NAME="price" id="Price">
            </P>
            <P>
                <LABEL FOR="quantity">QUANTITY:</LABEL><br>
                <INPUT TYPE="number" PLACEHOLDER="Quantity" REQUIRED NAME="quantity" id="Quantity">
            </P>
            <P>
                <LABEL FOR="isbn">ISBN:</LABEL><br>
                <INPUT TYPE="number" PLACEHOLDER="isbn" REQUIRED NAME="isbn" id="isbn">
            </P>
            <P>
                <LABEL FOR="email">EMAIL:</LABEL><br>
                <INPUT TYPE="email" PLACEHOLDER="email" REQUIRED NAME="email" id="email">
            </P>
            <p>
                <button type="submit" >Add Now</button>
                <td><a href="home.php">Back to home Page</a></td>
                
            </P>
        </form>
    </div>
</body>
</html>