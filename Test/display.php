<?php
//This file shows how to display data from the database using php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'firstdb';

$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn){
    $sql = "SELECT * FROM `data`";
    $queryexecution = mysqli_query($conn,$sql);
    if($queryexecution){
        //displays the data using the $numRows variable and the mysqli_num_rows($queryexecution) counts the number of rows. 
        $numRows = mysqli_num_rows($queryexecution);
        if($numRows>0){
            $row = mysqli_fetch_assoc($queryexecution);//fetches data from the database 
            echo $row['id']." : ".$row['username']." : ".$row['email'];
            echo "<br>";
        }

    }else{
        die(mysqli_error($conn));
    }

}else{
    die(mysqli_error($conn));
}

?>