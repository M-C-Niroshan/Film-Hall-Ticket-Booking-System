<html lang="en" dir="ltr">

<head>
    <title>Secured page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css-Files/receipt.css">

<html>
  <head>
    <title>Secured page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #e8fddf; margin:0 auto;margin-top: -25px;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your payment.<br><br>Movie: <span id="movie"></span><br>Date: <span id="date"></span><br>Time: <span id="time"></span><br><br/>Your seat number/s is/are: <br><span id="seatNs"></span></p>
        <button onclick="myFunction()" class="receipt"><b>Back to Home</b></button>
      </div>

      <script>
        var seatDataString = localStorage.getItem("seetData");
        var seatData = JSON.parse(seatDataString);
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

        document.getElementById("seatNs").innerHTML = seetNosString;
        document.getElementById("date").innerHTML = Year + "-" + Month + "-" + Date;
        document.getElementById("time").innerHTML = Time;
        document.getElementById("movie").innerHTML = FilmName;

        function myFunction(){
            window.location.href="home.php";
        }

        </script>



    </body>
</html>