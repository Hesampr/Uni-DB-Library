<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Control panel</title>
    <link rel="stylesheet" href="Login_Singup_style.css" />
</head>
<body>

  <br>

    <h2>Hi dear admin <br>Wellcome to control panel</h2>
    <form action="panelprocess.php" method= "post" >   
    <div class="container">
       
        <h1 ><u> Add new Book to library </u></h1>
        <label for="Book_name"><b>Book name</b></label>
        <input type="text" placeholder="Enter new book name" name="Book_name" required>
    
        <label for="Price"><b>Price</b></label>
        <input type="text" placeholder="Enter the price" name="Price" required>
    
        <button type="submit" name = "Add-btn">Add to library</button>
        
      </div>
    </form>
    <form action="panelprocess.php" method= "post">   
        <div class="container">
            <h1 ><u> Remove from library </u></h1>
            <label for="d_Book_name"><b>Book name</b></label>
            <input type="text" placeholder="Enter the book name" name="Book_name" required>
    
            <button type="submit" name= "Remove-btn">Remove from library</button>
            
          </div>
        </form>

</body>
</html>