<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Tickets</title>
    <link rel="stylesheet" href="Css-Files/BuyTicket.css">
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
                <li><a class="active"
                        style="font-weight: bolder; background-color: black; padding-top: 25px; padding-bottom: 32px; color: orangered;"
                        href="BuyTicket.php">Buy Tickets</a></li>
                <li><a class="link" href="contactUs.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>

    <!-- 2nd main parts -->
    <div class="LineA">
        <h2>Buy ticket</h2>
    </div>
    <div class="LineB">
        <span class="typeA">
         Pick a Movie &nbsp; &nbsp;
        </span>
        <span class="typeB">
         Pick a Seat &nbsp; &nbsp; Your details &nbsp; &nbsp; Summary
        </span>
    </div>

    <div class="LineA">
        Select Date
    </div>

    <div id="buttons-container" class="container">
    </div>

    <div Id="movie" class="LineA">
    </div>

    <div id="buttons-container_2" class="container">
    </div>

    <div Id="cinama" class="LineA">
    </div>

    <div id="buttons-container_3" class="container">
    </div>

    <div Id="time" class="LineA">
    </div>

    <div id="buttons-container_4" class="container">
    </div>

    <div class="center">
        <div id="PrNe">
        </div>
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
        let _year;
        let _month;
        let _Date;
        let _Film_Name;
        let _Cinama;
        let _Time;
        let _status = 0;
        let _status_2 = 0;

        let buttonState_1 = 0;
        let buttonState_1_pre = 0;

        let buttonState_2 = 0;
        let buttonState_2_pre = 0;

        let buttonState_3 = 0;
        let buttonState_3_pre = 0;

        let buttonState_4 = 0;
        let buttonState_4_pre = 0;


        myFunction();
        createNextPrebutton();

        function myFunction() {
            const D = new Date();
            _year = D.getFullYear(); // set year

            const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Today"];
            const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            const d = new Date();
            let N = d.getDay(); // Get day (0-6)

            let tempDay = N;
            let tempmonth;
            let onetime = 1;
            let M = d.getDate(); // Get date (0-31)
            let O = d.getMonth() + 1; // Get month(1-12)

            let day; //initialize variable 
            NewCount = 0; //renew week
            let month = months[d.getMonth()]; // Get month(january..)
            let message; //initialize variable 

            var buttonsContainer = document.getElementById("buttons-container"); // DOM Part

            for (let count = 0; count < 10; count++) { // get up comming day, date, month
                if ((N + NewCount) == 6) { //If end of the week re-new day
                    day = days[6];
                    N = 0;
                    NewCount = -1
                }
                else {
                    day = days[N + NewCount];
                }
                NewCount++; // increment date

                if ((N + NewCount - 1) == tempDay && onetime == 1) {
                    message = "Today"; // format message
                    onetime = 0;
                }
                else {
                    message = day + " " + M + " " + month; // format message
                }

                tempmonth = month; // tempery store month

                M++; // increment "d.getDate();" value

                if ((M == 32) && (O == 12)) { // If date grate than 31 update month 
                    month = months[0];
                }
                else if (M == 31) {
                    month = months[(d.getMonth()) + 1]; //If date grate than 31 update month 
                }

                if (M == 32) {  //fix date error (> 31)
                    M = 0;
                }

                var x = document.createElement("BUTTON");
                var t = document.createTextNode(message);
                x.appendChild(t);

                // Set the name and id attributes for each button
                x.name = "button_" + count;
                x.id = "button_" + count;
                x.date = M - 1;
                x.Month = O;

                // Set the onclick function for each button
                x.onclick = function () {
                    onClickFunction(count);
                };

                // Add a CSS class to the button
                x.classList.add("custom-button");

                // Append the button to the buttonsContainer div
                buttonsContainer.appendChild(x);
            }
        }

        function onClickFunction(buttonNumber) {
            //fix refresh error
            if (_status != 0) {
                document.getElementById("buttons-container_2").innerHTML = "";
                document.getElementById("buttons-container_2").innerHTML = "";
                document.getElementById("buttons-container_3").innerHTML = "";
                document.getElementById("buttons-container_4").innerHTML = "";

                document.getElementById("cinama").innerHTML = "";
                document.getElementById("time").innerHTML = "";

                _status_2 = 0; //deactivate button action(Previous/Next)
                deactivate();//deactiva(Previous/Next)

            }
            _status++;

            buttonState_1 = 0;
            buttonState_2 = 0;
            buttonState_3 = 0;
            buttonState_4 = 0;

            var clickedButton = document.getElementById("button_" + buttonNumber);
            var buttonName = clickedButton.name;
            var buttonId = clickedButton.id;
            var buttondate = clickedButton.date;
            var buttonmonth = clickedButton.Month;

            // Change css in selected button
            var clickedButtonPre = document.getElementById("button_" + buttonState_1_pre);
            clickedButtonPre.className = "custom-button";

            if (buttonState_1 == 0) {
                clickedButton.className = "custom-button-new";
                buttonState_1_pre = buttonNumber;
                buttonState_1 = 1;
            }
            else {
                clickedButton.className = "custom-button";
                buttonState_1 = 0;
                if (buttonNumber != buttonState_1_pre) {
                    clickedButton.className = "custom-button-new";
                    buttonState_1_pre = buttonNumber;
                }
            }

            _month = buttonmonth // setup month
            _Date = buttondate; // setup date

            var data = {
                Date: buttondate,
                Month: buttonmonth,
            };

            var xhr = new XMLHttpRequest();

            xhr.open("POST", "readfilms.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");

            xhr.onreadystatechange = function () {
                if (xhr.readyState == XMLHttpRequest.DONE) {

                    var data_array = JSON.parse(xhr.responseText);
                    fetchDataFromPHP(data_array);
                }
            };

            xhr.send(JSON.stringify(data));
        }

        // JavaScript function to fetch data from PHP using AJAX
        function fetchDataFromPHP(data_array) {


            // Update the HTML with the data
            var buttonsContainer = document.getElementById("buttons-container_2"); // DOM Part

            if (data_array.length == 0) { // if no any movies display that
                var myDivElement = document.getElementById('movie');
                myDivElement.className = "LineC"; // change class for red colour

                document.getElementById("movie").innerHTML = "No schedules available for selected date";

            }
            else {
                var myDivElement = document.getElementById('movie');
                myDivElement.className = "LineA";

                document.getElementById("movie").innerHTML = "";
                document.getElementById("movie").innerHTML = "Select Movie";
            }

            buttonsContainer.innerHTML = ''; // Clear the previous content
            buttonsContainer.innerHTML = '<br>'; // Make space

            // Loop through the data_array and display each set of data
            for (let i = 0; i < data_array.length; i++) {
                var data = data_array[i];

                var h = document.createElement("BUTTON");
                var k = document.createTextNode(data.name);
                h.appendChild(k);

                // Set the name and id attributes for each button
                h.name = "new_" + i;
                h.id = "new_" + i;
                h.Film = data.name;

                // Set the onclick function for each button
                h.onclick = function () {
                    onClickFunction_2(i);
                };

                // Add a CSS class to the button
                h.classList.add("custom-button");

                // Append the button to the buttonsContainer div
                buttonsContainer.appendChild(h);

            }
        }

        function onClickFunction_2(buttonNumber2) {

            var clickedButton = document.getElementById("new_" + buttonNumber2);
            var buttonName = clickedButton.name;
            var buttonId = clickedButton.id;
            var buttonfilm = clickedButton.Film;

            buttonState_1 = 0;
            buttonState_2 = 0;
            buttonState_3 = 0;
            buttonState_4 = 0;

            // Change css in selected button
            var clickedButtonPre = document.getElementById("new_" + buttonState_2_pre);
            clickedButtonPre.className = "custom-button";

            if (buttonState_2 == 0) {
                clickedButton.className = "custom-button-new";
                buttonState_2_pre = buttonNumber2;
                buttonState_2 = 1;
            }
            else {
                clickedButton.className = "custom-button";
                buttonState_2 = 0;
                if (buttonNumber2 != buttonState_2_pre) {
                    clickedButton.className = "custom-button-new";
                    buttonState_2_pre = buttonNumber2;
                }
            }

            deactivate();
            _status_2 = 0; //deactivate button action(Previous/Next)

            _Film_Name = buttonfilm; // setup film name

            var data_2 = {
                Id: buttonId,
                FilmName: buttonfilm,
            };

            var xhr = new XMLHttpRequest();

            xhr.open("POST", "readCinama.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");

            xhr.onreadystatechange = function () {
                if (xhr.readyState == XMLHttpRequest.DONE) {

                    var data_array_2 = JSON.parse(xhr.responseText);
                    fetchDataFromPHPCinama(data_array_2);
                }
            };

            xhr.send(JSON.stringify(data_2));
        }

        function fetchDataFromPHPCinama(data_array) {

            document.getElementById("time").innerHTML = "";
            document.getElementById("buttons-container_4").innerHTML = "";

            // Update the HTML with the data
            var buttonsContainer = document.getElementById("buttons-container_3"); // DOM Part

            document.getElementById("cinama").innerHTML = "Select a Cinama";

            buttonsContainer.innerHTML = ''; // Clear the previous content
            buttonsContainer.innerHTML = '<br>'; // Make space

            // Loop through the data_array and display each set of data
            for (let i = 0; i < data_array.length; i++) {
                var data = data_array[i];

                var c = document.createElement("BUTTON");
                var v = document.createTextNode(data.cinema);
                c.appendChild(v);

                // Set the name and id attributes for each button
                c.name = "new_1" + i;
                c.id = "new_1" + i;
                c.cinama = data.cinema;

                // Set the onclick function for each button
                c.onclick = function () {
                    onClickFunction_3(i);
                };

                // Add a CSS class to the button
                c.classList.add("custom-button");

                // Append the button to the buttonsContainer div
                buttonsContainer.appendChild(c);
                autoScroll();

            }
        }

        function onClickFunction_3(buttonNumber3) {

            var clickedButton = document.getElementById("new_1" + buttonNumber3);
            var buttonName = clickedButton.name;
            var buttonId = clickedButton.id;
            var buttoncinama = clickedButton.cinama;

            buttonState_1 = 0;
            buttonState_2 = 0;
            buttonState_3 = 0;
            buttonState_4 = 0;

            // Change css in selected button
            var clickedButtonPre = document.getElementById("new_1" + buttonState_3_pre);
            clickedButtonPre.className = "custom-button";

            if (buttonState_3 == 0) {
                clickedButton.className = "custom-button-new";
                buttonState_3_pre = buttonNumber3;
                buttonState_3 = 1;
            }
            else {
                clickedButton.className = "custom-button";
                buttonState_3 = 0;
                if (buttonNumber3 != buttonState_3_pre) {
                    clickedButton.className = "custom-button-new";
                    buttonState_3_pre = buttonNumber3;
                }
            }

            deactivate();
            _status_2 = 0; //deactivate button action(Previous/Next)

            _Cinama = buttoncinama; // setup film name

            var data_3 = {
                Id: buttonId,
                cinama: buttoncinama,
                Name: _Film_Name,
            };

            var xhr = new XMLHttpRequest();

            xhr.open("POST", "readTime.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");

            xhr.onreadystatechange = function () {
                if (xhr.readyState == XMLHttpRequest.DONE) {

                    var data_array_3 = JSON.parse(xhr.responseText);
                    fetchDataFromPHPTime(data_array_3);

                }
            };

            xhr.send(JSON.stringify(data_3));
        }
        function fetchDataFromPHPTime(data_array) {

            // Update the HTML with the data
            var buttonsContainer = document.getElementById("buttons-container_4"); // DOM Part

            buttonsContainer.innerHTML = ''; // Clear the previous content
            buttonsContainer.innerHTML = '<br>'; // Make space

            // Loop through the data_array and display each set of data
            if(data_array.length==0){
                var myDivElement = document.getElementById('time');
                myDivElement.className = "LineC"; // change class for red colour

                document.getElementById("time").innerHTML = "No schedules time available for selected Movie";

                process.exit();
            }
            var myDivElement = document.getElementById('time');
            myDivElement.className = "LineA"; // change class for red colour
            document.getElementById("time").innerHTML = "Select a showtime";
            for (let i = 0; i < data_array.length; i++) {
                var data = data_array[i];

                // Input: '15:00.00'

                let time = data.showTime;
                let time_new = time.toString();

                const timeString = time_new;
                const timeParts = timeString.split(':');
                const hours = parseInt(timeParts[0], 10);
                const minutes = parseInt(timeParts[1], 10);

                let formattedHours = hours % 12;
                formattedHours = formattedHours === 0 ? 12 : formattedHours;
                const period = hours >= 12 ? 'PM' : 'AM';

                const formattedMinutes = minutes < 10 ? `0${minutes}` : minutes; // Ensure minutes are always two digits

                const formattedTimeString = `${formattedHours}.${formattedMinutes} ${period}`;

                // Output: '3.00 PM'

                var j = document.createElement("BUTTON");
                var k = document.createTextNode(formattedTimeString);
                j.appendChild(k);

                // Set the name and id attributes for each button
                j.name = "new_2" + i;
                j.id = "new_2" + i;
                j.Time = formattedTimeString;

                // Set the onclick function for each button
                j.onclick = function () {
                    var clickedButton = document.getElementById("new_2" + i);

                    _Time = clickedButton.Time;

                    buttonState_1 = 0;
                    buttonState_2 = 0;
                    buttonState_3 = 0;
                    buttonState_4 = 0;

                    // Change css in selected button
                    var clickedButtonPre = document.getElementById("new_2" + buttonState_4_pre);
                    clickedButtonPre.className = "custom-button";

                    if (buttonState_4 == 0) {
                        clickedButton.className = "custom-button-new";
                        buttonState_4_pre = i;
                        buttonState_4 = 1;
                    }
                    else {
                        clickedButton.className = "custom-button";
                        buttonState_1 = 0;
                        if (i != buttonState_1_pre) {
                            clickedButton.className = "custom-button-new";
                            buttonState_1_pre = i;
                        }
                    }
                    activate();
                };

                // Add a CSS class to the button
                j.classList.add("custom-button");

                // Append the button to the buttonsContainer div
                buttonsContainer.appendChild(j);

                autoScroll();

            }

        }


        function activate() {
            var myDivElement = document.getElementById('task_1');
            myDivElement.className = "nex";
            _status_2 = 1 // activate next button

        }
        function deactivate() {
            var myDivElement = document.getElementById('task_1');
            myDivElement.className = "pre";
        }

        function createNextPrebutton() {

            var buttonsContainer = document.getElementById("PrNe"); // DOM Part
            var data_1 = "Back";
            var data_2 = "Next";

            for (let i = 0; i < 2; i++) {

                var g = document.createElement("BUTTON");
                if (i == 0) {
                    var f = document.createTextNode(data_1);
                }
                else {
                    var f = document.createTextNode(data_2);
                }

                g.appendChild(f);

                // Set the name and id attributes for each button
                g.name = "new_1" + i;
                g.id = "task_" + i;
                g.number = i;

                // Set the onclick function for each button
                g.onclick = function () {
                    onClickFunction_next(i);
                };

                // Add a CSS class to the button
                g.classList.add("pre");

                // Append the button to the buttonsContainer div
                buttonsContainer.appendChild(g);

            }
        }
        function onClickFunction_next(buttonNumber4) {
            var clickedButton = document.getElementById("task_" + buttonNumber4);
            var buttonName = clickedButton.name;
            var buttonId = clickedButton.id;
            var buttonNumber = clickedButton.number;

            if (_status_2 == 1 && buttonNumber == 1) {

                // save data using local storage
                localStorage.setItem("Year", _year);
                localStorage.setItem("Month", _month);
                localStorage.setItem("Date", _Date);
                localStorage.setItem("FilmName", _Film_Name);
                localStorage.setItem("Cinama", _Cinama);
                localStorage.setItem("Time", _Time);

                autoScroll();
                var link = document.createElement('a');
                link.href = 'pickAseat.php'; // Replace with the actual path to your HTML file
                link.target = '_self'; // This opens the linked HTML file in a new tab
                link.click(); // Programmatically click the link to initiate the navigation
            }

        }
        function autoScroll() {

            window.scroll({
                top: 2000,
                behavior: 'smooth'
            });

        }

    </script>

</body>

</html>