<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Tickets</title>

    <link rel="stylesheet" href="Css-Files/ThankYou.css">
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
                <li><a class="link"
                        style="font-weight: bolder; background-color: black; padding-top: 25px; padding-bottom: 32px; color: orangered;"
                        href="BuyTicket.php">Buy Tickets</a></li>
                <li><a class="active" href="#">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <div class="card">
        <span class="heart">&hearts;</span>
        <h1>Thank You for Your Responses</h1><br>
        <p>We're grateful for your valuable feedback.</p>
        <br>
        <div class="countdown">10</div>
    </div>

    <br>
    <div class="footer">
        <footer>
            <div class="container1">
                <div class="footerL">
                    <h1 class="newcenter">ShowTime</h1><br>
                    <ul class="newcenter">
                        <li><a class="link1" href="home.php"><span>Home</span> </a></li><br>
                        <li><a class="link1" href="movies.php"><span>Movies</span> </a></li><br>
                        <li><a class="link1" href="BuyTicket.php"><span>Buy Tickets</span> </a></li><br>
                        <li><a class="link1" href="contactUs"><span>Contact us</span> </a></li>
                    </ul>
                </div>

                <div class="footerC">
                    <h2 class="newcenter">General</h2><br>
                    <p class="newcenter">Show Time Enjoy life</p>
                </div>

                <div class="footerR">
                    <h2 class="newcenter">News letter</h2><br>
                    <p class="newcenter">Join our mailing list for promotions and latest movie updates.</p>
                </div>

            </div>
            <br>
            <div class="container2">
                <p class="newcenter">© 2023 ShowTime (Pvt) Ltd. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        let countdown = 10;
        const countdownElement = document.querySelector('.countdown');

        function updateCountdown() {
            countdown--;
            countdownElement.textContent = countdown;
            if (countdown === 0) {
                window.location.href = "home.php"; // Replace with the actual URL.
            }
        }

        setInterval(updateCountdown, 1000); // Update every 1 second.
    </script>
</body>

</html>