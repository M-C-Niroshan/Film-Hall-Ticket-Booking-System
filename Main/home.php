<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOWTIME</title>
    <link rel="stylesheet" href="Css-Files/home.css">
    <script src="https://fontawesome.com/search?q=star&o=r" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- nav bar -->
    <div class="allmovies">

        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-navicon"></i>
            </label>
            <label class="logo">SHOWTIME</label>
            <ul>
                <li><a class="active"
                        style="font-weight: bolder; background-color: black; padding-top: 25px; padding-bottom: 32px; color: orangered;"
                        href="#">Home</a></li>

                <li><a class="link" href="movies.php">Movies</a></li>
                <li><a class="link" href="BuyTicket.php">Buy Tickets</a></li>
                <li><a class="link" href="contactUs.php">Contact Us</a></li>
            </ul>
        </nav>

        <!-- slideshow -->
        <div class="slider">
            <div class="slidesContainer">
                <!-- Slides will be dynamically generated here -->
            </div>

            <!-- Previous and Next buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Navigation dots -->
            <div class="dotsbox" style="text-align:center">
                <!-- Dots will be dynamically generated here -->
            </div>
        </div>

        <!--js part-->
        <script>
            const slidesContainer = document.querySelector('.slidesContainer');
            const dotsContainer = document.querySelector('.dotsbox');
            let counter = 0; // Start with the first slide

            // Fetch slide data from the server
            fetch('slideshowDB.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach((slide, index) => {
                        // Create slide content
                        const slideDiv = document.createElement('div');
                        slideDiv.className = 'myslide fade';

                        const textDiv = document.createElement('div');
                        textDiv.className = 'txt';

                        const heading = document.createElement('h1');
                        heading.textContent = slide.sh_imgname;

                        const paragraph = document.createElement('p');
                        paragraph.textContent = slide.sh_desc;

                        textDiv.appendChild(heading);
                        textDiv.appendChild(paragraph);

                        const image = document.createElement('img');
                        image.className = 'sliderimg';
                        image.src = slide.sh_img;
                        image.style.width = '100%';

                        slideDiv.appendChild(textDiv);
                        slideDiv.appendChild(image);

                        slidesContainer.appendChild(slideDiv);

                        // Create navigation dot
                        const dot = document.createElement('span');
                        dot.className = 'dot';
                        dot.onclick = () => currentSlide(index + 1); // Slides are 1-indexed

                        dotsContainer.appendChild(dot);
                    });

                    // Show the first slide and set the active dot
                    showSlide(counter);
                    dotsContainer.children[counter].classList.add('active');
                })
                .catch(error => console.error('Error fetching slide data:', error));

            // Rest of your existing code remains unchanged...

            function showSlide(n) {
                const slides = document.querySelectorAll('.myslide');
                const dots = document.querySelectorAll('.dot');

                slides.forEach(slide => slide.style.display = 'none');
                dots.forEach(dot => dot.classList.remove('active'));

                slides[n].style.display = 'block';
                dots[n].classList.add('active');
            }

            // Add this function to your existing JavaScript code
            function plusSlides(n) {
                counter += n;
                const slides = document.querySelectorAll('.myslide');

                if (counter < 0) {
                    counter = slides.length - 1;
                } else if (counter >= slides.length) {
                    counter = 0;
                }

                showSlide(counter);
            }
            
        </script>
        <div class="bottom">
            <div class="desc">
                <h1>SHOWTIME</h1>
                <br>
                <P>"ShowTime Cinema Hall is a state-of-the-art entertainment destination that brings
                    the magic of movies to life. With its comfortable seating, cutting-edge audiovisual
                    technology, and a wide screen that immerses you in the cinematic experience,
                    ShowTime offers a perfect setting for enjoying the latest blockbusters,
                    classic films, and everything in between. Whether you're a film enthusiast or simply
                    looking for a great time with friends and family, ShowTime Cinema Hall
                    promises an unforgettable movie-going adventure."</P>
            </div>


            <div class="hall">

                <div class="c1">
                    <span class="title">C1</span>
                    <br>
                    <h2>SHOWTIME</h2>
                    <br><br><br><br>
                    <h2><i class="bi bi-speaker"></i> Dolby Atoms</h2>
                    <br>
                    <h2><i class="bi bi-camera-reels"></i> 4K Digital Projection</h2>
                </div>

                <div class="c2">
                    <span class="title">C2</span>
                    <br>
                    <h2>SHOWTIME</h2>
                    <br><br><br><br>
                    <h2><i class="bi bi-speaker"></i> Dolby 7.1 Sounds</h2>
                    <br>
                    <h2><i class="bi bi-camera-reels"></i> 2K Laser Projection</h2>
                </div>

                <div class="c3">
                    <span class="title">C3</span>
                    <br>
                    <h2>SHOWTIME</h2>
                    <br><br><br><br>
                    <h2><i class="bi bi-speaker"></i> Dolby 7.1 Sounds</h2>
                    <br>
                    <h2><i class="bi bi-camera-reels"></i> 2K Laser projection</h2>
                </div>

            </div>

        </div>
        <!-- footer part -->

        <br><br>
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

    </div>
</body>

</html>