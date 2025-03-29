<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="Css-Files/movies.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="maindiv">
        <!-- navbar -->
        <div class="allmovies">
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fa fa-navicon"></i>
                </label>
                <label class="logo">SHOWTIME</label>
                <ul>
                    <li><a class="link" href="home.php">Home</a></li>
                    <li><a class="active"
                            style="font-weight: bolder; background-color: black; padding-top: 25px; padding-bottom: 32px; color: orangered;"
                            href="#">Movies</a></li>
                    <li><a class="link" href="BuyTicket.php">Buy Tickets</a></li>
                    <li><a class="link" href="contactUs.php">Contact Us</a></li>
                </ul>
            </nav>


            <!-- now showing -->
            <div class="nowShowing">
                <br>
                <h1>Now Showing</h1>
                <hr class="hr">
            </div>
            <div class="filmline1">

            </div>


            <!-- comming soon movies -->
            <div class="commingsoon">
                <br>
                <h1>Comming soon</h1>
                <hr class="hr">
            </div>
            <div class="flist" style="background-color: black;    display: flex; flex-wrap: wrap; padding: 10px;     padding: 10px; justify-content: center; align-items: center;">
            </div>

            <!-- footer -->

            <div class="footer">
                <footer>
                    <div class="container1">

                        <div class="footerL">
                            <h1 class="center">ShowTime</h1><br>
                            <ul class="center">
                                <li><a class="link1" href="home.php"><span>Home</span> </a></li><br>
                                <li><a class="link1" href="movies.php"><span>Movies</span> </a></li><br>
                                <li><a class="link1" href="BuyTicket.php"><span>Buy Tickets</span> </a></li><br>
                                <li><a class="link1" href="contactUs.php"><span>Contact us</span> </a></li>
                            </ul>
                        </div>

                        <div class="footerC">
                            <h2 class="center">General</h2><br>
                            <p class="center">Show Time Enjoy life</p>
                        </div>


                        <div class="footerR">
                            <h2 class="center">News letter</h2><br>
                            <p class="center">Join our mailing list<br> for promotions and latest<br> movie updates.</p>
                        </div>


                    </div>
                    <br>
                    <div class="container2">
                        <p class="center">© 2023 ShowTime (Pvt) Ltd. All rights reserved.</p>
                    </div>

                </footer>
            </div>


            <!-- main div -->
        </div>

        <!-- js part -->
        <script>
            main();
            main2();

            function main() {
                var xhr = new XMLHttpRequest();

                xhr.open("POST", "GetFilmData.php", true);
                xhr.setRequestHeader("Content-Type", "application/json");

                xhr.onreadystatechange = function () {
                    if (xhr.readyState == XMLHttpRequest.DONE) {
                        var data_array = JSON.parse(xhr.responseText);
                        F1(data_array);
                    }
                };

                xhr.send(JSON.stringify());
            }

            function F1(data_array) {
                const cardContainer = document.querySelector(".filmline1");

                for (let i = 0; i < data_array.length; i++) {
                    var data = data_array[i];

                    var cardDiv = document.createElement("div");
                    cardDiv.classList.add("card1");

                    var imgElement = document.createElement("img");
                    imgElement.classList.add("cardimg");
                    imgElement.src = data.film_img;
                    cardDiv.appendChild(imgElement);

                    var nameElement = document.createElement("h3");
                    nameElement.textContent = data.Film_name;
                    cardDiv.appendChild(nameElement);

                    var hourElement = document.createElement("p");
                    hourElement.textContent = data.film_hour;
                    cardDiv.appendChild(hourElement);

                    var buyTicketsButton = document.createElement("button");
                    buyTicketsButton.type = "button";
                    buyTicketsButton.classList.add("buytickets");
                    buyTicketsButton.textContent = "Buy Tickets";

                    buyTicketsButton.addEventListener("click", function () {
                        // Redirect to BuyTicket.php
                        window.location.href = "BuyTicket.php";
                    });

                    cardDiv.appendChild(buyTicketsButton);

                    var trailerLink = document.createElement("a");
                    trailerLink.href = data.trialer;
                    var watchTrailerButton = document.createElement("button");
                    watchTrailerButton.type = "button";
                    watchTrailerButton.classList.add("trialer");
                    watchTrailerButton.textContent = "Watch Trailer";
                    trailerLink.appendChild(watchTrailerButton);
                    cardDiv.appendChild(trailerLink);

                    cardContainer.appendChild(cardDiv);
                }
            }




            /*comming soon */
            function main2() {

                var xhr = new XMLHttpRequest();

                xhr.open("POST", "GetCommingSoonFilm.php", true);
                xhr.setRequestHeader("Content-Type", "application/json");

                xhr.onreadystatechange = function () {
                    if (xhr.readyState == XMLHttpRequest.DONE) {
                        var data_array = JSON.parse(xhr.responseText);
                        F2(data_array);

                    }
                };

                xhr.send(JSON.stringify());
            }


            function F2(data_array) {
                const cardContainer = document.querySelector(".flist");

                for (let i = 0; i < data_array.length; i++) {
                    var data = data_array[i];

                    var cardDiv = document.createElement("div");
                    cardDiv.classList.add("card1");

                    var imgElement = document.createElement("img");
                    imgElement.classList.add("cardimg");
                    imgElement.src = data.f_img;
                    cardDiv.appendChild(imgElement);

                    var nameElement = document.createElement("h3");
                    nameElement.textContent = data.F_name;
                    cardDiv.appendChild(nameElement);

                    var hourElement = document.createElement("p");
                    hourElement.textContent = data.f_hour;
                    cardDiv.appendChild(hourElement);

                    /*                 var buyTicketsButton = document.createElement("button");
                                    buyTicketsButton.type = "button";
                                    buyTicketsButton.classList.add("buytickets");
                                    buyTicketsButton.textContent = "Buy Tickets";
                                    cardDiv.appendChild(buyTicketsButton); */

                    var trailerLink = document.createElement("a");
                    trailerLink.href = data.f_trialer;
                    var watchTrailerButton = document.createElement("button");
                    watchTrailerButton.type = "button";
                    watchTrailerButton.classList.add("trialer");
                    watchTrailerButton.textContent = "Watch Trailer";
                    trailerLink.appendChild(watchTrailerButton);
                    cardDiv.appendChild(trailerLink);

                    cardContainer.appendChild(cardDiv);

                    // Update the common elements outside the loop
                    //document.getElementById("name1c").innerHTML = data.Film_name;
                }

            }
        </script>

</body>

</html>