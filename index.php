<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripSplendor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>


    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo.png" alt=""></a>
            <div class="nav-links">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Trips</a></li>
                    <li><a href="">Review</a></li>
                    <li><a href="">More</a></li>
                </ul>
            </div>
        
        </nav>

        <div class="text-box">
            <h1>Find your paradise!</h1>
            <p>

"Discover the hidden treasures of the world with our exclusive travel experiences. Whether you seek adventure, relaxation, or cultural immersion, we have the perfect destination for you. Explore exotic landscapes, indulge in local cuisines, and create unforgettable memories. Start your journey today!"</p>
            <a href="userLoginForm.php" target="_blank" class="hero-btn" >Login</a>
            <a href="register.php" target="_blank" class="register" onclick="document.getElementById('id01').style.display='block'">Register</a>
        </div>
    </section>

    <!---header is over from here---->

    <section class="_content">
        <div class="searchHotel">
                <h1>Search your Hotel / Destination</h1>
                <input type="text" placeholder="Search Hotel.." name="" id="" >
                <input type="date" name="" id="">
                <br><br><br>
                
                <span class="hr"><hr></span>
        </div>

        <div class="container">    
            <a href="sandaru/IWT.html">Click to View Hotels</a>
            
        </div>
    </section> 

    <section class="Reviews">
        <h1>What our users say...</h1>

    <div class="reviewrow">
        <div class="Review-col">
            <img src="images/IMG_E1388 - Copy.JPG" alt="" width="20%">
            <h3>Nilaksha</h3>
            <p>The travel and tourism management system is quite user-friendly. I was able to easily book my accommodations and transportation. However, I did encounter some issues with the payment process, which was a bit frustrating. Overall, a good experience</p>
        </div>

        <div class="Review-col">
            <img src="images/user2.png" alt="" width="20%">
            <h3>Omaya</h3>
            <p>The system offers a wide range of services, which is great. However, I found the interface to be a bit outdated and not very intuitive. It took me a while to figure out how to navigate through the different options. Improving the user interface would greatly enhance the overall experience</p>
        </div>

        <div class="Review-col">
            <img src="images/user3.png" alt="" width="24%">
            <h3>Anjana</h3>
            <p>I absolutely love using this travel and tourism management system. It's incredibly easy to use, and I appreciate the level of detail provided for each listing. The system has made planning my trips so much more convenient. Highly recommend!</p>
        </div>


    </div>
    <div class="notice">    
            <a href="omaya/display_data.php">View Notices</a>  
    </div>
    <div class="packages">    
            <a href="anajana/read.php">View Packages</a>  
    </div>
    <div class="transport">    
            <a href="nimasha/Transportation - Copy.html">View Transportation Details</a>  
    </div>
    
    </section>

    <footer class="footer">
        <div class="footer_container">
            <div class="footer_row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
    
    
    
</body>
</html>