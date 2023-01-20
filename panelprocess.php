<?php

    require_once('connect.php') ;

    if (isset($_POST['Add-btn'])){
        $Book_name = mysqli_real_escape_string($conn,$_POST['Book_name']); 
        $Price = mysqli_real_escape_string($conn,$_POST['Price']); 
         

        try{
        $sql = "insert into books (name, price) values ('$Book_name', '$Price')" ; 
        $result = mysqli_query($conn,$sql) ; 
        echo "Your book successfuly added!"."<br>"."<br>" ;
        echo  '<a href= Controlpanel.php>Return to Control panel </a>' ;
        
        }
        Catch(Exception $e){  
            
            echo "We can't add new book to the list!";
            
            
        }
        
    }else if(isset($_POST['Remove-btn'])){
        $Book_name = mysqli_real_escape_string($conn,$_POST['Book_name']);
        
        try{
        
            $sql = "DELETE FROM books  WHERE `Name` = '$Book_name'" ;  
            $result = mysqli_query($conn,$sql) ; 
            echo "Your book successfuly removed!"."<br>"."<br>" ;
            echo  '<a href= Controlpanel.php>Return to Control panel </a>' ;
            
            }
            Catch(Exception $e){  
                echo "We can't remove this book from the list!"."<br>"."Please enter correct book name";
                
            }
    }else{
        echo "Undefinded error from server, please try again!" ; 
    }
    
?>