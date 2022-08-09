<?php

    $serverName = "LAPTOP-4QDACUO1\MYSQL";
    $connectionOptions = [ 
     "Database" => "project1" ,
     "Uid" =>"Saher",
        "PWD" =>"SaherSaher"
];
    $conn = sqlsrv_connect($serverName,$connectionOptions);
         if($conn == false) 
                die(print_r(sqlsrv_errors(),true));
        else echo 'Connection Success';


    $results = sqlsrv_query($conn,$sql);
        if($results)
            echo 'data insertion success';

        else 
             echo 'insertion ERROR';

?>