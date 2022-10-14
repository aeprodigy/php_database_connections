<form action="forms.php" method="POST">
    <div>
        <input type="text" name="username" placeholder="Enter name" autocomplete="off">
    </div>
    <br>
    <div>
        <input type="text" name="email" placeholder="Enter Email" autocomplete="off">
    </div>

    <div>
    <button type="submit">Send</button>
    </div>
    <br>
<form>
    <?php
    //checks if the server is connected with POST action.
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $username = $_POST['username'];
            $email = $_POST['email'];

            //we connect to the database
            $HOSTNAME = 'localhost';
            $USERNAME = 'root';
            $PASSWORD = '';
            $DATABASE = 'firstdb';

            //we create the connnection variable 
            $conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

            //check the connnection varibale 
            if($conn){
                $sql = "INSERT INTO `data` (username,email) VALUES ('$username','$email')";
                $queryexecute = mysqli_query($conn,$sql);

                if($queryexecute){
                   echo "Data inserted successfully!";
                 
                }else{
                    die(mysqli_error($conn)); 
                }
            }
            else{
                die(mysqli_error($conn));
            }
        }
    
    ?>
 