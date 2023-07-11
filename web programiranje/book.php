<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>


<!-- swiper css link   -->

<!--SwiperJS je JavaScript biblioteka za pravljenje reaktivnih, dodirno osetljivih klizača (slajdera) za veb i mobilne aplikacije. Ova biblioteka omogućava programerima da brzo i jednostavno kreiraju interaktivne klizače sa mnogim različitim funkcionalnostima i opcijama.

SwiperJS se može koristiti za pravljenje klizača sa različitim tipovima sadržaja, kao što su slike, video zapisi, HTML elementi i drugo. Biblioteka takođe sadrži mnoge dodatne funkcije kao što su automatsko pomicanje, beskonačno pomicanje, dodirno osetljivost, podrška za prevlačenje i puštanje, i mnoge druge.

SwiperJS je open-source projekat i dostupan je za besplatno korišćenje. Biblioteka ima veliku zajednicu korisnika i dokumentaciju koja vam može pomoći da brzo počnete da koristite SwiperJS. -->
<link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>



    <!--font awesome cdn link -->
<!--    -->
<!-- Sa stranice cdnjs.com ukucala sam font awesome 
CDNJS (Content Delivery Network for JavaScript) je besplatan javni CDN (Content Delivery Network) koji pruža popularne JavaScript biblioteke i druge web resurse. CDNJS omogućava web programerima da brzo i jednostavno pristupe JavaScript bibliotekama bez potrebe za njihovim preuzimanjem i hostovanjem na svojim serverima.

CDNJS takođe nudi i druge resurse kao što su CSS i fontovi, a sve to se distribuira preko globalne mreže servera. To omogućava da se ovi resursi učitavaju brže na korisničkim uređajima širom sveta, jer se zahtevi za resursima upućuju na najbliži dostupni server u mreži.

Korišćenje CDNJS-a može biti korisno za poboljšanje performansi i efikasnosti web stranica koje koriste JavaScript biblioteke i druge resurse koje nudi ovaj CDN.  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--  Custom CSS file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header section starts-->
<section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">

    <a href="home.php">Home</a>
    <a href="about.php">About</a>
     <a href="package.php">Package</a>
    <a href="book.php">Book</a>



    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--header section ends --> 

<div class="heading" style="background:url(slike/Univerzitet-PIM.jpg) no-repeat"> 

<!-- <h1>book</h1> -->

</div>

<!-- Booking section starts -->
<section class="booking">
    <h1 class="heading-title">Book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
<div class="flex">
    <div  class="inputBox">
        <span>name: </span>
        <input type="text" placeholder="enter your name" name="name">
    </div>

    <div  class="inputBox">
        <span>email: </span>
        <input type="email" placeholder="enter your email" name="email">
    </div>

    <div  class="inputBox">
        <span>phone: </span>
        <input type="number" placeholder="enter your phone" name="phone">
    </div>

    <div  class="inputBox">
        <span>address : </span>
        <input type="text" placeholder="enter your adress" name="address">
    </div>

    <div  class="inputBox">
        <span>Where to : </span>
        <input type="text" placeholder="place you want to visit" name="location">
    </div>

    <div  class="inputBox">
        <span>How many: </span>
        <input type="number" placeholder="number of guests" name="guests">
    </div>

    <div  class="inputBox">
        <span>Arrivals: </span>
        <input type="date" name="arrivals">
    </div>

        <div  class="inputBox">
        <span>leaving: </span>
        <input type="date" name="leaving">
    </div>
   
</div>
<input type="submit" value="submit" class="btn" name="send">
    </form>
</section>


<!--Booking section ends -->















<!--footer section start -->
<section class="footer">
    <div class="box-container">

    <div class="box">
        <h3>quick links</h3>
    <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
    <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
     <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>

</div>

<div class="box">
        <h3>extra links</h3>
    
    <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
    <a href="#"><i class="fas fa-angle-right"></i>about us</a>
    <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
    <a href="#"><i class="fas fa-angle-right"></i>terms of use </a>

</div>

<div class="box">
        <h3>Contact info:</h3>
    
    <a href="#"><i class="fas fa-phone"></i>+387-61-444-444</a>
    <a href="#"><i class="fas fa-phone"></i>+387-65-333-333</a>
    <a href="#"><i class="fas fa-envelope"></i> mojgmail@gmail.com </a>
    <a href="#"><i class="fas fa-envelope"></i> infomojgmail@gmail.com </a>
    <a href="#"><i class="fas fa-map"></i> Sarajevo, BiH - 71000</a>
</div>

<div class="box"> 
    <h3>follow us <h3> 
        <a  href="#"> <i class="fab fa-facebook-f"> </i> facebook </a>
        <a  href="#"> <i class="fab fa-linkedin"> </i> linkedin </a>
        <a  href="#"> <i class="fab fa-instagram"> </i> instagram </a>
        <a  href="#"> <i class="fab fa-tiktok"> </i> tiktok </a>
</div>

    </div>

    <div class="credit">created by <span>Nejra and Alma </span> | all right reserved</div>
</section>
<!--footer section ends -->


    
<!--swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>