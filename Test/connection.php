<!--//Three methods of database connections-->
<!--First Method-->
<?php 
/*
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';

//The connection Variable below
$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD);

if($conn){
    echo "Succcessful connection";
}
else{
    die(mysqli_error($conn));
}
*/

//Second Method of connection to the databasae.
//create a method object
/*
$mysqli = new mysqli('localhost','root','');

if($mysqli){
    echo "Succcessful connection";
}
else{
    die(mysqli_error($mysqli));
}

*/
//Third method of database connection
//in this method we will be using the define function which defines a constant.
//the values can not be changed once the values has been set.

define('DB_HOST','localhost');//database host.
define('DB_USERNAME','root');//username
define('DB_PASSWORD','');//password

$mysqli = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD);

if($mysqli){
    echo "3rd Method working perfectly";
}
else{
    die(mysqli_error($mysqli));
}

?>
