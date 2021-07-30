<?php
$notice = filter_input(INPUT_POST, 'notice');


    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "xtitan";

    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
     }
    else{
        $sql = "INSERT INTO announcement (notice)
        values ('$notice')";

        if ($conn->query($sql)){
        echo "New record is inserted sucessfully";
        }

        else{
        echo "Error: ". $sql ."<br>". $conn->error;
        }

         $conn->close();


    }

    

