<?php
    session_start();
    include("db.php");

    $data = json_decode(file_get_contents("php://input"), true);

    $Name = $data['Name'];
    $Date = $data["Date"];
    $Month = $data["Month"];
    $Cinema = $data['Cinama'];
    $Time = $data['Time'];

    //apply DateTime.
    $currentDate = new DateTime();
    //Get the year by using the format method.
    $year = $currentDate->format("Y");

    //CONVERT DATE AND MONTH TO SPECIFIC FORMAT
    $twoDigitdate = sprintf("%02d", $Date);// If date is 8 convert into >> 08
    $twoDigitmonth = sprintf("%02d", $Month);// If date is 8 convert into >> 08

    $formatedDate = $year.$twoDigitmonth.$twoDigitdate;

    $outputTime = date("His", strtotime($Time));

    $query = "select film_id from movies where film_name = '$Name' and show_date='$formatedDate' and cinema = '$Cinema' and show_time = '$outputTime' ";

    $result1 = $conn->query($query);

    if (!$result1) {
        die("Error: 1" . mysqli_error($conn));
    }


    if($result1->num_rows>0){
        while($row=$result1->fetch_assoc()){
            $ID = $row['film_id'];
        }
    }

    $query1 = "SELECT * FROM `seat` WHERE film_id LIKE '$ID';";
    
    $result2 = $conn->query($query1);

    if (!$result2) {
        die("Error: 2" . mysqli_error($conn));
    }


    $data_array_n = array(); // create array for store film names

    if($result2->num_rows>0){
        while($row=$result2->fetch_assoc()){
            $data_2 = array(
                'Seet_NO' => $row['seetNo'],
                'Seet_Status' => $row['status'],
                'film_ID' => $row['film_id'],
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