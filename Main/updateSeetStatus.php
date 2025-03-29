<?php
    session_start();
    include("db.php");

    $data = json_decode(file_get_contents("php://input"), true);

    $seetNo = $data["seetNo"];
    $film_ID = $data["film_ID"];
    
    $query = "UPDATE seat SET status = 'Unavailable' WHERE film_ID = '$film_ID' and seetNo='$seetNo';";

    $result1 = $conn->query($query);

    if (!$result1) {
        die("Error: 1" . mysqli_error($conn));
    }
    
    $conn->close();

?>