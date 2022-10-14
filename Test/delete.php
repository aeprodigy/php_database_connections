<?php
//in this file you get to learn to delete the data from your table
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

    //connection to the database 
    $conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
    $sql = "DELETE FROM `data` WHERE `id`='1'";
    $queryexecution = mysqli_query($conn,$sql);

    if($queryexecution){
        echo " info deleted successfully!";
    }else{
        die(mysli_error($conn));
    }

    if($conn){
        echo "Connected to delete successfully";

    }else{
        die(mysli_error($conn));
    }


?>