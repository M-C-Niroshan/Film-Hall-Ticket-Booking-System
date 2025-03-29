<?php
    session_start();
    include("db.php");

    $query = "select film_img,film_name,film_hour,trialer from movies";

    $result1 = $conn->query($query);

    if (!$result1) {
        die("Error: 1" . mysqli_error($conn));
    }

    $data_array_n = array();

    if($result1->num_rows>0){
        while($row=$result1->fetch_assoc()){

            $data_2 = array(
                'Film_name' => $row['film_name'],
                'film_img' => $row['film_img'],
                'film_hour' => $row['film_hour'],
                'trialer' => $row['trialer'],
            );
            $data_array_n[] = $data_2;
        }
    }

    // Close the database connection
    $conn->close();

    // Encode the data array as JSON format for easy handling in JavaScript
    $data_json = json_encode($data_array_n);

    // Send the JSON data as a response
    header('Content-Type: application/json');
    echo $data_json;

?>