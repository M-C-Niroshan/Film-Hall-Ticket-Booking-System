<?php
    session_start();
    include("db.php");

    $data = json_decode(file_get_contents("php://input"), true);

    $Id = $data["Id"];
    $FilmName = $data["FilmName"];

    $query = "select cinema from movies where film_name like '$FilmName'";

    $result = $conn->query($query);

    if (!$result) {
        die("Error: 1" . mysqli_error($conn));
    }

    $data_array_2 = array(); // create array for store cinama

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $data = array(
                'cinema' => $row['cinema'],
            );
            $data_array_2[] = $data;
        }
    }


    // Close the database connection
    $conn->close();

    // Encode the data array as JSON format for easy handling in JavaScript
    $data_json = json_encode($data_array_2);

    // Send the JSON data as a response
    header('Content-Type: application/json');
    echo $data_json;

?>