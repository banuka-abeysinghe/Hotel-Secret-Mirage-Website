<?php
        session_start();
                if(isset($_SESSION["successbook"])){
                    echo "
                    <script>alert('Successfully Booked. The hotel management will contact you soon')</script>
                    ";
                    session_destroy();
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
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Rooms</title>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap');

    #slider{
        overflow: hidden;
    }

    #slider figure{
        position: relative;
        width: 500%;
        margin: 0;
        left: 0;
        animation: 20s slider infinite;
    }

    #slider figure img{
        float: left;
        width:20% ;
        
    }

    p a{
        padding: 10px; background-color: coral; border-radius: 4px; color: #fff ; margin-left: 15px;
    }

    @keyframes slider {
        0%{
            left: 0;
        }
        20%{
            left: 0;
        }
        25%{
            left: -100%;
        }
        45%{
            left: -100%;
        }
        50%{
            left: -200%;
        }
        70%{
            left: -200%;
        }
        75%{
            left: -300%;
        }
        95%{
            left: -300%;
        }
        100%{
            left: -400%;
        }
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
                <li><a class="current" href="Rooms.php">Rooms</a></li>
            </ul>
            </div>

        </nav>
    </header>

    <main style="padding: 10px;background-image:url(img/cesar-couto-TIvFLeqZ4ec-unsplash.jpg);">
        <section style="border-bottom: 1px solid #ccc; padding-bottom: 20px; margin-bottom: 20px;">
            <h2 style="margin-top: 20px;margin-bottom: 10px;text-align: center;font-family:Lobster, sans-serif ; font-size : 40px;">JUNIOR SUITE</h2>
            
            <div id="slider">
                <figure>
                <img src="img/room11.jpg" alt="Junior Room">
                <img src="img/0125.jpeg" alt="Junior Room">
                <img src="img/0126.jpeg" alt="Junior Room">
                <img src="img/0127.jpeg" alt="Junior Room">
                <img src="img/room11.jpg" alt="Junior Room">
                </figure>
            </div>

            <p style="margin-top: 20px;">Experience luxury in our Junior Room, featuring a king-sized bed, en-suite bathroom, and stunning views of the city skyline. Perfect for both business and leisure travelers.
                
            </p>
        </section>
        <div style="background-color: #333;padding: 10px;">

        <br>
        <section style="padding-bottom: 20px; background-color: #333;">
            <h3 style="color: #ffffffcd;text-align: center;">Amenities</h3>
            <ul style="list-style-type: none; padding: 0;">
                <li style="background-color: #fdfdfd; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa fa-wifi" aria-hidden="true"></i> &nbsp;&nbsp;<b>Free Wi-Fi</b></li>
                <li style="background-color: #928c8c; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-snowflake"></i>&nbsp;&nbsp;<b>Air Conditioning</b></li>
                <li style="background-color: #ffffff; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-tv">&nbsp;&nbsp;</i><b>Flat Screen TV</b></li>
                <li style="background-color: #928c8c; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-martini-glass"></i>&nbsp;&nbsp;<b>Mini Bar</b></li>
                <li style="background-color: #ffffff; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-concierge-bell"></i>&nbsp;&nbsp;<b>Room Service</b></li>
            </ul>
            <section style="background-color: #333">
                <h1 style="padding-bottom: 10px;padding-top: 10px; background-color: #333;color: #e7dede; padding-left: 20px; text-align: center;">Price : Rs.20,000 per night</h3>
                <center><p><a href="booking.php?roomtype=JUNIOR ">Book Now</a></p></center>
            </section>
        </section>
        </div>


            <section style="border-bottom: 1px solid #ccc; padding-bottom: 20px; margin-bottom: 20px;">
                <h2 style="margin-top: 20px;margin-bottom: 10px;text-align: center;font-family:Lobster, sans-serif ; font-size : 40px;">SUPIRIOR SUITE</h2>
                
                <div id="slider">
                    <figure>
                    <img src="img/room11.jpg" alt="Supirior Room">
                    <img src="img/0125.jpeg" alt="Supirior Room">
                    <img src="img/0126.jpeg" alt="Supirior Room">
                    <img src="img/0127.jpeg" alt="Supirior Room">
                    <img src="img/room11.jpg" alt="Junior Room">
                    </figure>
                </div>

                <p style="margin-top: 20px;">Experience luxury in our Supirior Room, featuring a king-sized bed, en-suite bathroom, and stunning views of the city skyline. Perfect for both business and leisure travelers.
                    
                </p>
            </section>
            
            <div style="background-color: #333;padding: 10px;">
            
            <br>
            
            <section style="padding-bottom: 20px; background-color: #333;">
                <h3 style="color: #f1f1f1;text-align: center;">Amenities</h3>
                <ul style="list-style-type: none; padding: 0; ">
                    <li style="background-color: #ffffff; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa fa-wifi" aria-hidden="true"></i> &nbsp;&nbsp;<b>Free Wi-Fi</b></li>
                    <li style="background-color: #928c8c; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-snowflake"></i>&nbsp;&nbsp;<b>Air Conditioning</b></li>
                    <li style="background-color: #ffffff; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-tv">&nbsp;&nbsp;</i><b>Flat Screen TV</b></li>
                    <li style="background-color: #928c8c; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-martini-glass"></i>&nbsp;&nbsp;<b>Mini Bar</b></li>
                    <li style="background-color: #ffffff; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-concierge-bell"></i>&nbsp;&nbsp;<b>Room Service</b></li>
                </ul>
                <section style="background-color: #333">
                    <h1 style="padding-bottom: 10px;padding-top: 10px; background-color: #333;color: #e7dede; padding-left: 20px; text-align: center;">Price : Rs.30,000 per night</h3>
                    <center><p><a href="booking.php?roomtype=SUPIRIOR ">Book Now</a></p></center>
                </section>
            </section>
            </div> 


                <section style="border-bottom: 1px solid #ccc; padding-bottom: 20px; margin-bottom: 20px;">
                    <h2 style="margin-top: 20px;text-align: center;font-family:Lobster, sans-serif ; font-size : 40px;">FAMILY SUITE</h2>
                    
                    <div id="slider">
                        <figure>
                        <img src="img/room11.jpg" alt="Family Room">
                        <img src="img/0125.jpeg" alt="Family Room">
                        <img src="img/0126.jpeg" alt="Family Room">
                        <img src="img/0127.jpeg" alt="Family Room">
                        <img src="img/room11.jpg" alt="Junior Room">
                        </figure>
                    </div>

                    <p style="margin-top: 20px;">Experience luxury in our Family Room, featuring a king-sized bed, en-suite bathroom, and stunning views of the city skyline. Perfect for both business and leisure travelers.
                        
                    </p>
                </section>
                
                <div style="background-color: #333;padding: 10px;">

                <br>

                <section style="padding-bottom: 20px; background-color: #333;">
                    <h3 style="color: #f1f1f1;text-align: center;">Amenities</h3>
                    <ul style="list-style-type: none; padding: 0; ">
                        <li style="background-color: #ffffff; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa fa-wifi" aria-hidden="true"></i> &nbsp;&nbsp;<b>Free Wi-Fi</b></li>
                        <li style="background-color: #928c8c; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-snowflake"></i>&nbsp;&nbsp;<b>Air Conditioning</b></li>
                        <li style="background-color: #ffffff; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-tv">&nbsp;&nbsp;</i><b>Flat Screen TV</b></li>
                        <li style="background-color: #928c8c; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-martini-glass"></i>&nbsp;&nbsp;<b>Mini Bar</b></li>
                        <li style="background-color: #ffffff; padding: 10px; margin-bottom: 5px;border-radius: 50px;margin-left: 10px;margin-right: 10px;text-align: center;"><i class="fa-solid fa-concierge-bell"></i>&nbsp;&nbsp;<b>Room Service</b></li>
                    </ul>
                    <section style="background-color: #333">
                        <h1 style="padding-bottom: 10px;padding-top: 10px; background-color: #333;color: #e7dede; padding-left: 20px; text-align: center;">Price : Rs.50,000 per night</h3>
                        <center><p><a href="booking.php?roomtype=FAMILY">Book Now</a></p></center>
                    </section>
                </section>
                </div>

    
</main>
    <footer id="main-footer">
        <p>Hotel Secret Mirage &copy; 2022, All Right Reserved</p>
    </footer>
</body>
</html>

