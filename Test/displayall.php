<?php
//This file displays all the data in the database's tables
//table is data
//database name is firstdb
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'firstdb';

//connection line of code.
$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn){
    $sql = "SELECT * FROM `data`";
    $queryexecution = mysqli_query($conn, $sql);
    if($queryexecution){
        //gives count of a number of rows in our database.
        $numRow = mysqli_num_rows($queryexecution);
        if($numRow>0){
            while($row=mysqli_fetch_assoc($queryexecution))
            {
             ?>
             <table>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>

                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                </tr>
             </table>
             <?php
            }
        }
    }
}else{
    die(mysqli_error($conn));
    
}

 

?>