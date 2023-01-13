<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sginup</title>
    <link rel="stylesheet" href="Login_Singup_style.css" />
</head>
<body>
    <form action="Singup_process.php" method="post">   
    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter your email" name="email" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
    
        <button  type="submit" name= "btn-save" >Signup </button>
        
        
      </div>
      
      <div class="container" style="background-color:#f1f1f1">
        
        <span class="pass"><a href="Login.php"> Have you an account? </a></span>
      </div>


    </form>


</body>
</html>