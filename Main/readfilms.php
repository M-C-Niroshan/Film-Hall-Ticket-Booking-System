<?php
    session_start();
    include("db.php");

    $data = json_decode(file_get_contents("php://input"), true);

    $Date = $data["Date"];
    $Month = $data["Month"];

    //apply DateTime.
    $currentDate = new DateTime();
    //Get the year by using the format method.
    $year = $currentDate->format("Y");

    $twoDigitdate = sprintf("%02d", $Date);     // If date is 8 convert into >> 08
    $twoDigitmonth = sprintf("%02d", $Month);   // If date is 8 convert into >> 08

    $data = $year.$twoDigitmonth.$twoDigitdate;

    $query = "select film_name from movies where show_date='$data'";
    /*error_log("Formatted Date: " . $data);*/
/*     $query1 = "select count(film_name) from film where show_date='$data'"; */

    $result1 = $conn->query($query);

/*     $result2 = mysqli_query($conn, $query1); */

    if (!$result1) {
        die("Error: 1" . mysqli_error($conn));
    }

/*     if (!$result2) {
        die("Error: 2" . mysqli_error($conn));
    }
 */


    $data_array = array();                        // create array for store film names

    if($result1->num_rows>0){
        while($row=$result1->fetch_assoc()){
            $data = array(
                'name' => $row['film_name'],
            );
            $data_array[] = $data;
        }
    }

    // Close the database connection
    $conn->close();

    // Encode the data array as JSON format for easy handling in JavaScript
    $data_json = json_encode($data_array);

    // Send the JSON data as a response
    header('Content-Type: application/json');
    echo $data_json;

?>