<?php 
    require_once('connect.php');

    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $sql = "select * from signup where username = ? " ; 
    $stmt = $conn->prepare($sql) ; 
    $stmt->bind_param("s",$username) ; 
    $stmt->execute();
    $stmt_result= $stmt->get_result() ;
    if ($stmt_result -> num_rows > 0){
        $data = $stmt_result->fetch_assoc() ;  
        if($data['Password']==$pass){
            echo "You successfully loged in"."<br>"."Hi dear ".$username; 

        }else{
            echo "Invalid Username or Password, Please enter correct Username or Password"."<br>"."<br>" ; 
            echo  '<a href= login.php>Return to Login page </a>' ;
        }

    }else{
        echo "Invalid Username or Password, Please enter correct Username or Password"."<br>"."<br>" ; 
        echo  '<a href= login.php>Return to Login page </a>' ;
    }
   


?>