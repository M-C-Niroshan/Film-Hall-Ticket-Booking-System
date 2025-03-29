<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="Css-Files/contactUs.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-navicon"></i>
        </label>
        <label class="logo">SHOWTIME</label>
        <ul>
            <li><a class="link" href="home.php">Home</a></li>

            <li><a class="link" href="movies.php">Movies</a></li>
            <li><a class="link" href="BuyTicket.php">Buy Tickets</a></li>
            <li><a class="active" href="#"
                    style="font-weight: bolder; background-color: black; padding-top: 25px; padding-bottom: 32px; color: orangered;">Contact
                    Us</a></li>
        </ul>
    </nav>



    <!--     contact us  -->
    <div class="contactus">
        <br>
        <h1>Contact Us</h1>
        <hr class="hr">
        <p class="headdingp" style="font-size:18px;">Thank you for visiting our website!<br> If you have any questions, feedback, or inquiries,
            please don't hesitate to get in touch with us.<br> We value your input and strive to provide the best possible
            service.</p>
    </div>

    <div class="container">
        <div class="content">
            <div class="content-form1">
                <section class="s1">
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true" style="color: red"></i>
                    <h2>address</h2>
                    <p>
                        Colombo
                    </p>
                </section>

                <section class="s2">
                    <i class="fa fa-phone fa-2x" aria-hidden="true" style="color: rgb(68,198,104)"></i>
                    <h2>Phone</h2>
                    <p>0765859658</p>
                </section>

                <section class="s3">
                    <i class="fa fa-envelope fa-2x" aria-hidden="true" style="color: rgb(115,173,205);"></i>
                    <h2>E-mail</h2>
                    <p>showtime@gmail.com</p>
                </section>
            </div>
        </div>

        <form action="User_Idea.php" method="post">
            <div class="form">
                <div class="right">
                    <div class="contact-form">
                        <input type="text" name="name" required>
                        <span>Name:</span>
                    </div>

                    <div class="contact-form">
                        <input type="E-mail" name="email" required class="imcl">
                        <span>E-mail:</span>
                    </div>
                    <div class="contact-form">
                        <input type="tel" name="phone" required>
                        <span>Phone number:</span>
                    </div>

                    <div class="contact-form">
                        <textarea name="message"></textarea>
                        <span> Type your Message:</span>
                    </div>

                    <div class="contact-form">
                        <input type="submit" name="submit">
                    </div>
                </div>
            </div>
    </div>
    </form>

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
                        <li><a class="link1" href="#"><span>Contact us</span> </a></li>
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
</body>

</html>