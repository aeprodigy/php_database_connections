<?php
    //inserting data into the database
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'firstdb';

    //table name is `data`.
    //connnection
    $conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

    //connection check
    if($conn){
       
        //data insertion query
        $sql = "INSERT INTO `data`(username,email) VALUES('Mike','mikeapple056@gmail.com')";
       
        //Query execution
        $queryexecution = mysqli_query($conn,$sql);
       
        //check the query
        if($queryexecution){
            echo 'data inserted successfully';
        }
        else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }

?>