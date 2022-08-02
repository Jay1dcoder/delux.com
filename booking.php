<?php 
require 'dml.php';
    $connection = new booking();
    $connection->reserve_room();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="booking1.css">
</head>
<body>
            <form method="POST">
    <!-- <div class="logo"> <a href="landing.php" title="GO BACK TO HOME PAGE"> DELUX HOTEL </a></div> -->
<br><br><br><br>
                <div class="input-group">
                    <label for="check-in DATE" class="input-label">Check-In DATE</label>
                    <input type="date" class="input" id="check-in" name="check_in">
                </div>

                <div class="input-group">
                    <label for="check-out" class="input-label">Check-out DATE</label>
                    <input type="date" class="input" id="check-out" name="check_out">
                </div>

                <div class="input-group">
                    <label for="check-out" class="input-label">Booking Name</label>
                    <input type="text" class="input" id="check-out" name="bookName" placeholder="Name to book the Hotel Under">
                </div>

                <h2>OR</h2>

                <input type="checkbox" name="uname">BOOK A RESERVATION WITH YOUR USERNAME

                <br><br><br><br>

                <input type="submit" value="RESRVE" name="submit">
            </form>

</body>
</html>