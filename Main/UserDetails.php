<?php
session_start();
include("db.php");

$data = $_SESSION['data_to_retrieve'];

$query_0 = "select film_id from movies where film_name = '$data' ";

$result1 = $conn->query($query_0);

if (!$result1) {
    die("Error: 1" . mysqli_error($conn));
}

if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $ID = $row['film_id'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];

    $query = "INSERT INTO user(film_id,Name,Email,Phone) VALUES ($ID,'$Name','$Email','$Phone')";
    $result = $conn->query($query);

    if (!$result) {
        echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
    } else {

        $_SESSION['user'] = array(
            'film_id' => $ID,
            'Name' => $Name,
            'Email' => $Email,
            'Phone' => $Phone
        );
        header("location:summary.php");
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Details</title>
    <link rel="stylesheet" href="Css-Files/UserDetails.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- 1st main parts -->
    <div class="allmovies">

        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-navicon"></i>
            </label>
            <label class="logo">SHOWTIME</label>
            <ul>
                <li><a class="link" href="home.php">Home</a></li>

                <li><a class="link" href="movies.php">Movies</a></li>
                <li><a class="active" href="BuyTicket.php"
                        style="font-weight: bolder; background-color: black; padding-top: 25px; padding-bottom: 32px; color: orangered; text-decoration: none;">Buy
                        Tickets</a></li>
                <li><a class="link" href="contactUs.php">Contact Us</a></li>
            </ul>
        </nav>

        <!-- 2nd main parts -->

        <div class="details">
            <br>
            <div class="LineB">
                <span class="typeB">
                    Pick a Movie &nbsp; &nbsp; Pick a Seat &nbsp; &nbsp;
                </span>
                <span class="typeA">
                    Your details
                </span>
                <span class="typeB">
                    &nbsp; &nbsp; Summary
                </span>
            </div>
            <div class="formdiv">
                <form action="UserDetails.php" method="POST">
                    <div class="form-row">
                        <label for="inputNameField">Your Name&nbsp</label>
                        <input type="text" required placeholder="Enter your name" class="inpt" id="name"
                            name="Name"><br><br>
                    </div>
                    <br>
                    <div class="form-row">
                        <label for="inputEmail">Your E-mail</label>
                        <input type="text" required placeholder="Enter your E-mail" class="inpt" id="email"
                            name="Email"><br><br>
                    </div>
                    <br>
                    <div class="form-row">
                        <label for="inputPhone" class="mob">Mobile No &nbsp</label>
                        <input type="text" pattern="^\+94\d{9}$" required placeholder="+94" minlength="12"
                            maxlength="12" class="inpt" id="phone" name="Phone"><br><br>
                    </div>
                    <div class="btn">
                        <button class="pre" onclick="goBack()">Back</button>
                        <button type="submit" class="nex">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- footer part -->
    <div class="footer">
        <footer>
            <div class="container1">
                <div class="footerL">
                    <h1 class="center">ShowTime</h1><br>
                    <ul class="center">
                        <li><a class="link1" href="home.php"><span>Home</span> </a></li><br>
                        <li><a class="link1" href="movies.php"><span>Movies</span> </a></li><br>
                        <li><a class="link1" href="BuyTicket.php"><span>Buy Tickets</span> </a></li><br>
                        <li><a class="link1" href="contactUs"><span>Contact us</span> </a></li>
                    </ul>
                </div>

                <div class="footerC">
                    <h2 class="center">General</h2><br>
                    <p class="center">Show Time Enjoy life</p>
                </div>

                <div class="footerR">
                    <h2 class="center">News letter</h2><br>
                    <p class="center">Join our mailing list for promotions and latest movie updates.</p>
                </div>

            </div>
            <br>
            <div class="container2">
                <p class="center">© 2023 ShowTime (Pvt) Ltd. All rights reserved.</p>
            </div>
        </footer>
    </div>
    
    <script>
        myFunction();
        function myFunction() {
            var FilmName = localStorage.getItem("FilmName");
            for (var i = 0; i < 1; i++) {
                var data = {
                    filmName: FilmName,
                };
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "Tempary_data.php", true);
                xhr.setRequestHeader("Content-Type", "application/json");
                xhr.send(JSON.stringify(data));
            }
        }

        function goBack() {
            window.history.back();
        }
        document.getElementById('name').classList.add('is-valid');
        document.getElementById('email').classList.add('is-valid');
        document.getElementById('phone').classList.add('is-valid');
    </script>
</body>

</html>