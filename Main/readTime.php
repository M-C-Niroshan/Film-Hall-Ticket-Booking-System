<?php
    session_start();
    include("db.php");

    $data = json_decode(file_get_contents("php://input"), true);

    $cinama = $data["cinama"];
    $FilmName = $data["Name"];
    
    $current_time = date("His");
    $currentDate = date("Y-m-d");

    $query = "select show_time from movies where film_name like '$FilmName' and cinema=$cinama and not(show_time > $current_time and show_date like '$currentDate')";

    $result = $conn->query($query);

    if (!$result) {
        die("Error: 1" . mysqli_error($conn));
    }

    $data_array_3 = array();            // create array for store cinama

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $data = array(
                'showTime' => $row['show_time'],
            );
            $data_array_3[] = $data;
        }
    }

    // Close the database connection
    $conn->close();

    // Encode the data array as JSON format for easy handling in JavaScript
    $data_json = json_encode($data_array_3);

    // Send the JSON data as a response
    header('Content-Type: application/json');
    echo $data_json;
?>