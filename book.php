<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!--swiper css link-->
    <!--<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">-->

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
     
<!--header section starts-->

<section class="header">

    <a href="home.php" class="logo">HangMate</a>
    
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="listing.php">listing</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars">

    </div>
</section>
<!--header section ends-->

<div class="heading" style="background:url(images/aboutcover.jpg) no-repeat">
    <h1>Book now</h1>
</div>

<!--booking section starts-->

<section class="booking">

    <h1 class="heading-title">Book your hangout!</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>Name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>Phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>Where to? :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>How many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>

        </div>

        <input type="submit" value="submit" class="btn" name="send">

    </form>

</section>

<!--booking session ends-->















<!--footer section starts-->

<section class="footer">

    <div class="box-container">

    <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
        <a href="listing.php"> <i class="fas fa-angle-right"></i> listing</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
        <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
        <a href="#"> <i class="fas fa-envelope"></i> info@hangmate.com </a>
        <a href="#"> <i class="fas fa-map"></i> nairobi, kenya - 00200 </a>
     </div>

     <div class="box">
        <h3>Follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
    </div>

    </div>

<div class="credit"> Created by <span> HangMate</span> | all rights reserved! </div>

</section>

<!--footer section ends-->











<!--swiper js link-->
<!--<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>-->

<!--custom js file link-->
<script src="js/script.js"></script>
</body>
</html>
