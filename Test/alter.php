<?php
//This file and code talks about how to alter the table.
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
       // $sql = "ALTER TABLE `data` DROP column email";
       $sql = "ALTER TABLE `data` ADD column occupation VARCHAR(100) "; 
       $queryexecution = mysqli_query($conn,$sql);
        
        if($queryexecution){
            echo "alter successful";
        }else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }
?>