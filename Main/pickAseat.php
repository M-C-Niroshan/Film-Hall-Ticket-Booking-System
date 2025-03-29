<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pik A Seet</title>

    <link rel="stylesheet" href="Css-Files/pickAseat.css">
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
        <span class="typeB">
            Pick a Movie &nbsp; &nbsp;
        </span>
        <span class="typeA">
            Pick a Seat 
        </span>
        <span class="typeB">
            &nbsp; &nbsp; Your details &nbsp; &nbsp; Summary
        </span>
    </div>

    <div class="LineA">
        <br>
    </div>

    <div id="heading" class="Heading">
    </div>

    <br><br><br>

    <div class="Heading">
        Screen
    </div>

    <div>
        <nav class="screen"></nav>
    </div>

    <br><br>
    <div id="buttons-container_5" class="container">
    </div>

    <br><br>
    <div class="Heading-new">
        Unavailable: <button type="button" class="custom-button-describe-Unvailable"></button> &nbsp; &nbsp;&nbsp;
        &nbsp;
        Available: <button type="button" class="custom-button-describe-Available"></button> &nbsp; &nbsp;&nbsp; &nbsp;
        Selected: <button type="button" class="custom-button-describe-select"></button>
    </div>

    <br><br>
    <div id="buttons-container_6" class="Heading-two">
    </div>

    <br><br>

    <lable class="alignItem_1">
        <span class="alignItem_2">&nbsp; &nbsp;Adults: <input type="text" id="textboxId_1" name="textboxName_1"
                oninput="handleInputChange_1(this.value,0)" class="textbox" /></span>
        <span class="alignItem_2">Ticket price: <input type="text" id="textboxId_2" name="textboxName_2" class="textbox"
                readonly /></span>
        <span class="alignItem_2">Online fee: <input type="text" id="textboxId_3" name="textboxName_3" class="textbox"
                readonly /></span>
        <span class="alignItem_2">Ticket price: <input type="text" id="textboxId_4" name="textboxName_4" class="textbox"
                readonly /></span>
    </lable>

    <br><br><br><br>
    <lable class="alignItem_1">
        <span class="alignItem_2">Children: <input type="text" id="textboxId_5" name="textboxName_5"
                oninput="handleInputChange_2(this.value,1)" class="textbox" /></span>
        <span class="alignItem_2">Ticket price: <input type="text" id="textboxId_6" name="textboxName_6" class="textbox"
                readonly /></span>
        <span class="alignItem_2">Online fee: <input type="text" id="textboxId_7" name="textboxName_7" class="textbox"
                readonly /></span>
        <span class="alignItem_2">Ticket price: <input type="text" id="textboxId_8" name="textboxName_8" class="textbox"
                readonly /></span>
    </lable>

    <br><br><br><br>
    <div id="subTotal" class="Heading-three">
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
        var seetStatus = false;
        var noOfseetSeleced = 0;
        let seetData = [];
        let adultNoOfSeets = 0;
        let childNoOfSeets = 0;
        let adultTicketPrice = 0;
        let childTicketPrice = 0;

        // retrieve data (previous page)
        var Year = localStorage.getItem("Year");
        var Month = localStorage.getItem("Month");
        var Date = localStorage.getItem("Date");
        var FilmName = localStorage.getItem("FilmName");
        var Cinama = localStorage.getItem("Cinama");
        var Time = localStorage.getItem("Time");

        document.getElementById("heading").innerHTML = FilmName + " | " + "C" + Cinama + " | " + Year + "-" + Month + "-" + Date + " | " + Time;

        document.getElementById("buttons-container_6").innerHTML = noOfseetSeleced + " Ticket(s) selected. Please select attendees";
        var textboxId_1 = document.getElementById("textboxId_1");

        main();

        var textboxId_1 = document.getElementById("textboxId_1");
        textboxId_1.value = 0;

        var textboxId_2 = document.getElementById("textboxId_2");
        textboxId_2.value = 1150;

        var textboxId_2 = document.getElementById("textboxId_3");
        textboxId_3.value = 50;

        var textboxId_4 = document.getElementById("textboxId_4");
        textboxId_4.value = 0;

        var textboxId_5 = document.getElementById("textboxId_5");
        textboxId_5.value = 0;

        var textboxId_6 = document.getElementById("textboxId_6");
        textboxId_6.value = 950;

        var textboxId_7 = document.getElementById("textboxId_7");
        textboxId_7.value = 50;

        var textboxId_8 = document.getElementById("textboxId_8");
        textboxId_8.value = 0;

        update_sub_total(); // Display total is 0

        createNextPrebutton();

        //Activate previous button
        var myDivElement = document.getElementById('task_0');
        myDivElement.className = "nex";

        function main() {

            var data_new = {
                Name: FilmName,
                Date: Date,
                Month: Month,
                Cinama: Cinama,
                Time: Time,
            };

            var xhr = new XMLHttpRequest();

            xhr.open("POST", "GetSeetstatus.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");

            xhr.onreadystatechange = function () {
                if (xhr.readyState == XMLHttpRequest.DONE) {

                    var data_array = JSON.parse(xhr.responseText);
                    F1(data_array);
                }
            };

            xhr.send(JSON.stringify(data_new));
        }
        function F1(data_array) {

            var buttonsContainer = document.getElementById("buttons-container_5");

            for (let i = 0; i < data_array.length; i++) {
                var data = data_array[i];

                var s = document.createElement("BUTTON");
                var d = document.createTextNode(data.Seet_NO);
                s.appendChild(d);

                // Set the name and id attributes for each button
                s.name = "new_2" + i;
                s.id = "new_2" + i;
                s.seetNo = data.Seet_NO;
                s.seetStatus = data.Seet_Status;
                s.film_ID = data.film_ID;

                // Set the onclick function for each button
                s.onclick = function () {
                    onClickFunction_F2(i);
                };

                // Add a CSS class to the button

                if (data.Seet_Status == 'Available') {
                    s.classList.add("custom-button-Available");
                }
                else {
                    s.classList.add("custom-button-Unvailable");
                }

                // Append the button to the buttonsContainer div
                buttonsContainer.appendChild(s);
            }
        }
        function onClickFunction_F2(button_num) {

            var clickedButton = document.getElementById("new_2" + button_num);
            var seetId = clickedButton.id;
            var SeetNo = clickedButton.seetNo;
            var SeetStatus = clickedButton.seetStatus;
            var film_ID = clickedButton.film_ID;


            var myDivElement = document.getElementById("new_2" + button_num);

            if (SeetStatus == 'Available') {
                if (myDivElement.classList.contains("custom-button-select")) {
                    myDivElement.classList.remove("custom-button-select");

                    // Find the index of the deselected seat in the seetData array
                    var index = seetData.findIndex(function (item) {
                        return item.SeetNo === SeetNo;
                    });

                    // If the deselected seat is found, remove it from the seetData array
                    if (index !== -1) {
                        seetData.splice(index, 1);
                    }
                    noOfseetSeleced--;
                }
                else {
                    if (noOfseetSeleced < 10) {
                        myDivElement.classList.add("custom-button-select");
                        let newObject = {
                            SeetNo: SeetNo,
                            SeetStatus: SeetStatus,
                            film_ID: film_ID,
                        };

                        seetData.push(newObject);
                        noOfseetSeleced++;
                    }
                    else {
                        alert("Max");
                    }


                }
            }

            document.getElementById("buttons-container_6").innerHTML = noOfseetSeleced + " Ticket(s) selected. Please select attendees";
            var textboxId_1 = document.getElementById("textboxId_1");
            textboxId_1.value = noOfseetSeleced;

            var textboxId_5 = document.getElementById("textboxId_5");
            textboxId_5.value = "0";

            var textboxId_8 = document.getElementById("textboxId_8");
            textboxId_8.value = "0";

            childTicketPrice = 0;

            adultNoOfSeets = noOfseetSeleced;
            handleInputChange_1(noOfseetSeleced);

            activate();
        }

        function autoScroll() {

            window.scroll({
                top: 2000,
                behavior: 'smooth'
            });

        }

        function handleInputChange_1(value, value_2) {
            if (value_2 == 0) {

                if (Number(value) == 0) {
                    var subTotalElement = document.getElementById("textboxId_4");
                    subTotalElement.value = 0;

                    adultTicketPrice = 0;

                    adultNoOfSeets = 0;
                    update_sub_total();
                }
                else if (Number(value) % 2 == 0 || Number(value) % 2 == 1) {

                    var ticketPrice = 1150;
                    var onlineFee = 50;
                    var subTotalElement = document.getElementById("textboxId_4");
                    var subTotal = Number(value) * ticketPrice + onlineFee;
                    subTotalElement.value = subTotal;

                    adultTicketPrice = Number(value) * ticketPrice + onlineFee;

                    var childrenElement = document.getElementById("textboxId_5");
                    childrenElement.value = 0;

                    adultNoOfSeets = Number(value);

                    update_sub_total();
                }
                else {
                    alert("Enter Correct number !");
                }

                if (noOfseetSeleced - Number(value) != 0) {
                    var childrenElement = document.getElementById("textboxId_5");
                    childrenElement.value = noOfseetSeleced - Number(value);

                    handleInputChange_2(noOfseetSeleced - Number(value), 0);
                }
                else {
                    childNoOfSeets = 0;

                    var subTotalElement_2 = document.getElementById("textboxId_8");
                    subTotalElement_2.value = 0;

                    childTicketPrice = 0;
                    update_sub_total();
                }
            }
            else {

                if (Number(value) == 0) {
                    var subTotalElement = document.getElementById("textboxId_4");
                    subTotalElement.value = 0;
                    adultTicketPrice = 0;

                    update_sub_total();
                }
                else if (Number(value) % 2 == 0 || Number(value) % 2 == 1) {
                    var ticketPrice = 1150;
                    var onlineFee = 50;
                    var subTotalElement = document.getElementById("textboxId_4");
                    var subTotal = Number(value) * ticketPrice + onlineFee;
                    subTotalElement.value = subTotal;

                    adultTicketPrice = Number(value) * ticketPrice + onlineFee;

                    adultNoOfSeets = Number(value);

                    update_sub_total();
                }
                else {
                    alert("Enter Correct number !");
                }

            }
        }

        function handleInputChange_2(value, value_2) {

            if (value_2 == 0) {
                var subTotalElement = document.getElementById("textboxId_8");
                if (Number(value) == 0) {
                    subTotalElement.value = 0;
                    childTicketPrice = 0;
                    update_sub_total();

                }
                else if (Number(value) % 2 == 0 || Number(value) % 2 == 1) {

                    var ticketPrice = 950;
                    var onlineFee = 50;
                    var subTotal = Number(value) * ticketPrice + onlineFee;
                    subTotalElement.value = subTotal;

                    childTicketPrice = Number(value) * ticketPrice + onlineFee;


                    childNoOfSeets = Number(value);
                    update_sub_total();
                }
                else {
                    alert("Enter Correct number !");
                }
                if (noOfseetSeleced - value != 0) {
                    var adultElement = document.getElementById("textboxId_1");
                    adultElement.value = noOfseetSeleced - value;

                }

            }
            else {

                var subTotalElement = document.getElementById("textboxId_8");
                if (Number(value) == 0) {
                    childNoOfSeets = 0;

                    subTotalElement.value = 0;

                    childTicketPrice = 0;
                    update_sub_total();
                }
                else if (Number(value) % 2 == 0 || Number(value) % 2 == 1) {
                    var ticketPrice = 950;
                    var onlineFee = 50;
                    var subTotal = Number(value) * ticketPrice + onlineFee;
                    subTotalElement.value = subTotal;

                    childNoOfSeets = Number(value);

                    childTicketPrice = Number(value) * ticketPrice + onlineFee;
                    update_sub_total();
                }
                else {
                    alert("Enter Correct number !");
                }
                if (noOfseetSeleced - Number(value) != 0) {
                    var adultElement = document.getElementById("textboxId_1");
                    adultElement.value = noOfseetSeleced - Number(value);
                    handleInputChange_1(noOfseetSeleced - Number(value), 1);

                }
                else {
                    adultNoOfSeets = 0;

                    var adultElement = document.getElementById("textboxId_1");
                    adultElement.value = "0";

                    var subTotalElement_2 = document.getElementById("textboxId_4");
                    subTotalElement_2.value = "0";
                    adultTicketPrice = 0;
                    update_sub_total();
                }

            }

        }

        function update_sub_total() {
            var outputElement = document.getElementById("subTotal");
            var total = adultTicketPrice + childTicketPrice;
            outputElement.textContent = "Total: LKR " + total + ".00";
        }


        function createNextPrebutton() {

            var buttonsContainer = document.getElementById("PrNe");
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

        function activate() {
            if (noOfseetSeleced > 0) {
                var myDivElement = document.getElementById('task_1');
                myDivElement.className = "nex";
                _status_2 = 1                   // activate next button
            }
            else {
                var myDivElement = document.getElementById('task_1');
                myDivElement.className = "pre";
            }


        }


        function onClickFunction_next(buttonNumber4) {
            var clickedButton = document.getElementById("task_" + buttonNumber4);
            var buttonName = clickedButton.name;
            var buttonId = clickedButton.id;

            if (buttonNumber4 == 0) {

                var link = document.createElement('a');
                link.href = 'BuyTicket.php';       // Replace with the actual path to your HTML file
                link.target = '_self';          // This opens the linked HTML file in a new tab
                link.click();                   // Programmatically click the link to initiate the navigation
            }
            else if (noOfseetSeleced > 0) {

                localStorage.setItem("noOfseetSeleced", noOfseetSeleced);
                localStorage.setItem("seetData", JSON.stringify(seetData));
                localStorage.setItem("adultNoOfSeets", adultNoOfSeets);
                localStorage.setItem("childNoOfSeets", childNoOfSeets);
                localStorage.setItem("adultTicketPrice", adultTicketPrice);
                localStorage.setItem("childTicketPrice", childTicketPrice);

                //Link to Summary page
                var link = document.createElement('a');
                link.href = 'UserDetails.php';  // Replace with the actual path to your HTML file
                link.target = '_self';          // This opens the linked HTML file in a new tab
                link.click();                   // Programmatically click the link to initiate the navigation
            }

        }
    </script>

</html>