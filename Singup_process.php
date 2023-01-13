<!DOCTYPE html>

<?php

    require_once('connect.php') ;

    if (isset($_POST['btn-save'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']); 
        $email = mysqli_real_escape_string($conn,$_POST['email']); 
        $pass = mysqli_real_escape_string($conn,$_POST['pass']); 

        try{
        $sql = "insert into signup (Username, Email, Password) values ('$username', '$email','$pass')" ; 
        $result = mysqli_query($conn,$sql) ; 
        echo "You successfully signed up!"."<br>"."<br>" ;
        echo '<a href= login.php> Login page </a>' ;
        }
        Catch(Exception $e){  
            
            echo "Invalid Username or Email"."<br>"."<br>"."PLease try again with another Username or Email"."<br>"."<br>";
            echo  '<a href= Signup.php>Return to Signup page </a>' ;
          
            
        }
        
    }
    
?>
