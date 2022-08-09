 <?php

session_start(); 

include 'connection.php';
   
    
    
    $newfname =$_POST['fname'];
    $newlname =$_POST['lname'];
    $newid =$_POST['id'];
    $newphone =$_POST['phone'];
    $newaddress =$_POST['address'];
    $newage =$_POST['age'];
    $newusername =$_POST['username'];
    $newpasswords =$_POST['passwords'];

    $insertar ="INSERT INTO users (fname,lname,idnum,phone,usertype,city,age,username,passwords)
            values ('$newfname','$newlname','$newid','$newphone','$newaccout','$newaddress','$newage','$newusername','$newpasswords')";
    
    $recurso = sqlsrv_prepare($conn,$insertar);

    if(sqlsrv_execute($recurso)){ 
        echo "correct connect" ;
    }
    else { 
        echo "not correct connet ";
    }



?>