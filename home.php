<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--swiper css link-->
    <!--<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">-->

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

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

<!--home section starts-->

<section class="Home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/hhpeople.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="listing.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/contact_cover.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel </span>
                    <h3> Discover hidden gems</h3>
                    <a href="listing.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/listing_cover.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel </span>
                    <h3> Make your hangout worthwhile</h3>
                    <a href="listing.php" class="btn">discover more</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>
<!--home section ends-->

<!--services section starts-->

<section class="services">

    <h1 class="heading-title"> our services </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/bowl.jpg" alt="">
            <h3> Indoor Activity </h3>
        </div>

        <div class="box">
            <img src="image" alt="">
            <h3> Outdoor Activity </h3>
        </div>

        <div class="box">
            <img src="image" alt="">
            <h3> Experiences </h3>
        </div>

        <div class="box">
            <img src="image" alt="">
            <h3> Packages </h3>
        </div>

        <div class="box">
            <img src="image" alt="">
            <h3> Restaurant </h3>
        </div>

        <div class="box">
            <img src="image" alt="">
            <h3> Customize Hangout </h3>
        </div>

    </div>

</section>
<!--services section ends-->
















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

<!-- <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script> -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!--custom js file link-->
<script src="js/script.js"></script>
</body>
</html>
