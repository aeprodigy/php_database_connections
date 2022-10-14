<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'firstdb';
//connection
$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn){
    echo "connected";
    //Table creation below this line
    $sql = "CREATE TABLE `data`(`id` INT(100) NOT NULL AUTO_INCREMENT,`username` VARCHAR(100) NOT NULL, `email` VARCHAR(100) NOT NULL, PRIMARY KEY(`id`))";
    $queryexecution = mysqli_query($conn,$sql);

    if($queryexecution){
        echo "Table created";
    }else{
        die(mysqli_error($conn));
    }
}

else{
    die(mysqli_error($conn));
}



?>