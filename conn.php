<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "xtitan";

    // Create connection
    $conn = new mysqli ($dbServername, $dbUsername, $dbPassword, $dbName );

?>

<!DOCTYPE html>
<html> 

<body>

<?php

$sql  = "SELECT * FROM announcement;";
$result = mysqli_query($conn,$sql);

$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0 ){
    while ($row = mysqli_fetch_assoc($result)){

    
        echo  $row['ID'] . " . " ;
        echo $row['notice'] . " <br> <br>";

    }
    

}


$conn->close();
?>

</body>
</html>
