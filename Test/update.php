<?php
    //This file updates the data in the table
    /*
    table name = `data`;
    database name =`firstdb`;
    username = `root`;
    hostname = `localhost`;
    password = ``;
    */ 
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'firstdb';

    $conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($conn){
    $sql = "UPDATE `data` SET `email`= 'prodigy@gmail.com' WHERE `id`='4'";
    $queryExecution= mysqli_query($conn,$sql);

    if($queryExecution){
        echo "data inserted successfully!";
    }
    else{
        die(mysqli_error($conn));
    }
}else{
    die(mysqli_error($conn));
}



?>