<?php
session_start();
?>

<html lang="en" dir="ltr">
<head>
    <title>Secured page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css-Files/payment.css">
</head>

<body>
    <div class="card mt-50 mb-50">
        <form>
            <span id="card-header">Payment Option:</span>
            <div id="mastr" class="row row-1 clicked">
                <div class="col-2"><img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png"/></div>
                <div class="col-3 d-flex justify-content-center">
                    <a href="#">mastercard</a>
                </div>
            </div>
            <div id="visa" class="row row-1 clicked">
                <div class="col-2"><img  class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png"/></div>
                <div class="col-3 d-flex justify-content-center">
                    <a href="#">Visa</a>
                </div>
            </div>
            <span id="card-header">Card Details:</span>
            <div class="row-1">
                <div class="row row-2">
                    <input type="text" placeholder="Card holder name" id="cardHolderName">
                </div>
            </div>
            <div class="row three">
                <div class="col-7">
                    <div class="row-1">
                        <div class="row row-2" id="creditCard">
                            <input type="text" placeholder="Card Number" maxlength="16" id="cardNumber">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <input type="text"  placeholder="Exp. date  YYYY/MM/DD" maxlength="8" id="expDate">
                </div>
                <div class="col-2">
                    <input type="text" placeholder="CVN" maxlength="3" id="cvn">
                </div>
            </div>
        </form>
        <button class="backbtn" onclick="goBack()">Cancel</button>
        <button onclick="myFunction()" class="btn d-flex mx-auto pay pay-button-disabled" id="payNowButton"><b>Pay Now</b></button>
    </div>

    <script>
        // Get the div elements by their IDs
        var mastr = document.getElementById("mastr");
        var visa = document.getElementById("visa");

        // Add a click event listener to div1
        mastr.addEventListener("click", function() {
            mastr.style.backgroundColor = "lightgray";
            visa.style.backgroundColor = "transparent";
        });

        // Add a click event listener to div2
        visa.addEventListener("click", function() {
            visa.style.backgroundColor = "lightgray";
            mastr.style.backgroundColor = "transparent";
        });



        // Get the elements
        var cardHolderName = document.getElementById("cardHolderName");
        var cardNumber = document.getElementById("cardNumber");
        var expDate = document.getElementById("expDate");
        var cvn = document.getElementById("cvn");
        var payNowButton = document.getElementById("payNowButton");

        // Add event listener to check data and enable/disable Pay Now button
        cardHolderName.addEventListener("input", validateForm);
        cardNumber.addEventListener("input", validateForm);
        expDate.addEventListener("input", validateForm);
        cvn.addEventListener("input", validateForm);

        function validateForm() {
            var isValid = cardHolderName.value.trim() !== "" &&
                          cardNumber.value.trim().length === 16 &&
                          expDate.value.trim().length === 8 &&
                          cvn.value.trim().length === 3;

            if (isValid) {
                payNowButton.classList.remove("pay-button-disabled");
                payNowButton.classList.add("pay-button-enabled");
            } else {
                payNowButton.classList.remove("pay-button-enabled");
                payNowButton.classList.add("pay-button-disabled");
            }
        }

        function myFunction() {
            // Check if the form is valid before proceeding
            if (!payNowButton.classList.contains("pay-button-enabled")) {
                alert("Please fill in all required fields before proceeding.");
            } else {
                window.location.href = "receipt.php";
            }
        }

        function goBack() {
                window.history.back();
            }
    </script>
    
</body>
</html>