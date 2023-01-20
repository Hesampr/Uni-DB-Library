<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login</title>
    <link rel="stylesheet" href="Login_Singup_style.css" />
</head>
<body>
    <form action="login_process.php" method="post">   
    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
    
        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
    
        <button type="submit">Login</button>
        
      </div>
      <div class="container" style="background-color:#f1f1f1">
        
        <span class="pass"><a href="Signup.php"> Haven't an account? </a></span>
      </div>


    </form>

</body>
</html>