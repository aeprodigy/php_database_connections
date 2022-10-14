<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';

//The connection Variable below
$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD);

if($conn){
    echo "Succcessful connection ";
    //we create the database below this line once the connection has been achieved.
    $sql ="CREATE DATABASE `firstdb`";//we run the query on this line
    $queryexecution =mysqli_query($conn,$sql);//query execution is done here.

    if($queryexecution){
        echo "Database Created ";
    }else{
        die($mysqli_error($conn));
    }
}
else{
    die(mysqli_error($conn));
}
?>
