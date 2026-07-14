<?php
    session_start();
    if(isset($_GET["roomtype"])){
        $roomtype = $_GET["roomtype"];
    }
    else{
        header("Location:Rooms.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Discription" content="welcome to hotel sectet mirage">
        <meta name="keywords" content=" hotel , hotels in mathale , mathale hotels,sri lanka hotels">
        <link rel="stylesheet" href="./Css.css">
        <link rel="stylesheet" href="./form.css">
        <title>Booking</title>

        <style>

        form{

            border-radius: 20px;
            margin-bottom:20px;
        }

        </style>
    
    </head>

<body>
<header>
    <nav id="navbar">
        <div class="container">
        <h1 class="logo"><a href="home.html">Hotel Secret Mirage</a></h1>
        <ul>
            <li><a  href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contacct.html">Contact</a></li>
            <li><a href="Rooms.php">Rooms</a></li>
        </ul>
        </div>

    </nav>

    <section class="bookingform">
        <form action="resavations.php" method="post" style="border-color:white;">
            <h2>Hotel Reservation Form</h2>
            <h2 style = "margin-top:20px;font-weight:bold;"><?php echo "{$roomtype} SUITE"; ?></h2>
            <br>
    
            <label class="form text"> <Name>Full Name</Name></label>
            <br>
            <input type="text" required name="Full_Name"  pattern="[A-Za-z\s]+" title="Please enter a valid name (letters and spaces only)" ><br>
    
            <label class="form text">E-mail</label>
            <br>
            <input type="email" required name="E_mail"><br>
    
            <label for="phone">Phone No:</label><br>
            <input type="tel" id="phone" name="Phone" pattern="^\+?[0-9\s\-]{10,10}$" required title="Please Enter a Valid number (07X XXX XXXX)"><br>
    
            <label for="checkin">Check-In Date:</label><br>
            <input type="date" id="checkin" name="CheckIn" required ><br>
            <label for="checkout">Check-Out Date:</label><br>
            <input type="date" id="checkout" name="CheckOut" required min=""><br>
    
            <?php

                if(isset($_SESSION["chechdate"])){
                    echo "
                    <div style = 'background-color:#f00;color:#fff;padding:2%;'>
                        This room type is reserved
                    </div>
                    ";
                    session_destroy();
                }

            ?>
    
            <label class="form text">Select Room Preference</label><br>
            <input type="text" class = "roomselect" value = "<?php echo $roomtype . "SUITE";?>" name="Room_Type" readonly><br>
    
            <lable class="occupants">No of room occupants</lable><br>
            <label id="occupants1" class="widt">Adults</label><input type="number" id="Adults" class="space" min="1" max="8" name="Adults" value="1" >
             <label id="occupants2"class="widt">Children</label><input type="number" id="Children" min="0" max="7"name="Children"><br>
            
            <br>
            <label class="form text">Special Request</label><br>
    
            <textarea name="Special Request" id="tarea" cols="30" rows="10"></textarea><br>
            <center><input type="submit" name="save" value="submit"></center>
            
    
    
    
        </form>
    </section>

    <footer id="main-footer">
        <p id="footer">Hotel Secret Mirage &copy; 2022, All Right Reserved</p>
    </footer>
    
</body>
<script>
  var today = new Date().toISOString().split('T')[0];
var checkinInput = document.getElementById("checkin");
var checkoutInput = document.getElementById("checkout");

// Set minimum date for Check-In to today
checkinInput.setAttribute('min', today);

// Update the Check-Out date whenever the Check-In date changes
checkinInput.addEventListener('change', function() {
    var checkinDate = new Date(this.value);
    // Set the minimum Check-Out date to one day after the selected Check-In date
    checkinDate.setDate(checkinDate.getDate() + 1);
    var minCheckoutDate = checkinDate.toISOString().split('T')[0];
    checkoutInput.setAttribute('min', minCheckoutDate);
});
    </script>
</html>