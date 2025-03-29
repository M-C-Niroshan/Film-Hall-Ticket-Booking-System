<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
    <link rel="stylesheet" href="Css-Files/summary.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- 1st main parts -->
    <div class="allmovies">
        <nav>
            <input type="checkbox" id="check">
            <label class="logo">SHOWTIME</label>
            <ul>
                <li><a class="link" href="home.php">Home</a></li>
                <li><a class="link" href="movies.php">Movies</a></li>
                <li><a class="active"
                        style="font-weight: bolder; background-color: black; padding-top: 25px; padding-bottom: 32px; color: orangered;"
                        href="BuyTicket.php">Buy Tickets</a></li>
                <li><a class="link" href="contactUs.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>

    <div class="container1">
        <div class="LineB">
            <span class="typeB">
                Pick a Movie &nbsp; &nbsp; Pick a Seat &nbsp; &nbsp;
            </span>
            <span class="typeB">
                Your details
            </span>
            <span class="typeA">
                &nbsp; &nbsp; Summary
            </span>
        </div>
        <div class=Summain>
            <div class="summary" style="color:white;"><br><br><br><br>
                <br><h2 style="color: #1BA098;font-size 30px; margin-top: 30px;">Summary</h2>
                <div class="mainDIV">
                    <div class="divTitles1" style="color: aliceblue; text-align:left;font-weight: bold;">
                        <p> Film Name<br><br>Date<br><br>ShowTime<br><br><br><br>Hall<br><br>No of Tickets<br><br>Seat<br><br>Adult no of Seats<br><br>Child no of Seats<br><br>Total<br><br><br><br>Name<br><br>Email<br><br>Phone</p>
                    </div>
                    <div class="divTitles2" id="Report_1" style="color:white;text-align: left;">
                    </div>
                </div>
                <div class="udDIV">
                <?php
                if (isset($_SESSION['user'])) {
                    $userDetails = $_SESSION['user'];
                    echo "<p style='text-align: left;'>" . $userDetails['Name'] . "</P>";
                    echo "<br>";
                    echo "<p style='text-align: left;'>". $userDetails['Email'] . "</p>";
                    echo "<br>";
                    echo "<p style='text-align: left;'>". $userDetails['Phone'] . "<p>";
                } else {
                    echo "<p>No user details available.</P>";
                }
                ?>
                </div>
                <div id="Report_2" style="color:white;">
                </div>
                <br><br><br>
            </div>
            <button class="backbtn" onclick="goBack()">Previous</button>
            <button onclick="myFunction()" class="nextButton">Next</button>
        </div>
        <br>
    </div>
    <!-- footer part -->
    <div class="footer">
        <footer>
            <div class="containerNew">

                <div class="footerL">
                    <h1 class="center">ShowTime</h1><br>
                    <ul class="newcenter">
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
            <div class="container2">
                <br>
                <p class="center">© 2023 Property Finance and Investments (Pvt) Ltd. All rights reserved.</p>
            </div>

        </footer>
    </div>

    </div>
    <script>
        // Retrieve data from local storage
        var noOfseetSeleced = localStorage.getItem("noOfseetSeleced");
        var seatDataString = localStorage.getItem("seetData");
        var seatData = JSON.parse(seatDataString);
        var adultNoOfSeets = localStorage.getItem("adultNoOfSeets");
        var childNoOfSeets = localStorage.getItem("childNoOfSeets");
        var adultTicketPrice = localStorage.getItem("adultTicketPrice");
        var childTicketPrice = localStorage.getItem("childTicketPrice");
        var subTotal = Number(adultTicketPrice) + Number(childTicketPrice); 

        var Year = localStorage.getItem("Year");
        var Month = localStorage.getItem("Month");
        var Date = localStorage.getItem("Date");
        var FilmName = localStorage.getItem("FilmName");
        var Cinama = localStorage.getItem("Cinama");
        var Time = localStorage.getItem("Time");


        var seetNos = seatData.map(function (item){
            return item.SeetNo;
        });
        var seetNosString = seetNos.join(" "); // join the SeetNo values with a space



        document.getElementById("Report_1").innerHTML = FilmName +"<br><br>"+ Year + "-" + Month + "-" + Date +"<br><br>" + Time + "<br><br><br><br>" + "C" + Cinama + "<br><br>" + noOfseetSeleced + "<br><br>" + seetNosString + "<br><br>" + adultNoOfSeets + "<br><br>" + childNoOfSeets + "<br><br>Rs: " + subTotal + ".00";
    
        for (var i = 0; i < seatData.length; i++) {

            var data = {
                seetNo: seatData[i].SeetNo,
                film_ID: seatData[i].film_ID,
            };

            var xhr = new XMLHttpRequest();

            xhr.open("POST", "updateSeetStatus.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");

            xhr.send(JSON.stringify(data));
        }
        function goBack() {
                window.history.back();
            }
        function myFunction(){
            window.location.href = "payment.php";
        }

    </script>
</body>

</html>