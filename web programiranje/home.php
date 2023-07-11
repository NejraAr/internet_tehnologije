<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


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
    <a href="home.php" class="logo">PIMTravel.</a>
    <nav class="navbar">

    <a href="home.php">Home</a>
    <a href="about.php">About</a>
     <a href="package.php">Package</a>
    <a href="book.php">Book</a>



    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--header section ends --> 

<!-- home section starts -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(/slike/Group\ 11.png) no-repeat">
                <div class="content"> 
                <span> explore, discover, travel </span>
            <h3>Putovanje širom Evrope</h3>

            <a href="package.php" class="btn">Discover More</a>

                </div>
        
</div>
        



        <div class="swiper-slide slide" style="background:url(/slike/Group\ 44.png) no-repeat">
                <div class="content"> 
                <span> explore, discover, travel </span>
            <h3>Istraži nova mjesta sa PIM-om</h3>

            <a href="package.php" class="btn">Discover More</a>

                </div>
        
        
        </div>

        <div class="swiper-slide slide" style="background:url(/slike/Group\ 1.png) no-repeat">
                <div class="content"> 
                <span> explore, discover, travel </span>
            <h3>Edukacija iz snova</h3>

            <a href="package.php" class="btn">Discover More</a>

                </div>
        
        
        </div>
           
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    </div>
    </section>


<!--services section starts -->
<section class="services">

<h1 class="heading-title"> Naše usluge</h1>

<div class="box-container">

    <div class="box">
        <img src="/slike/tent.png" alt="">
        <h3>Putovanja</h3>
    </div>

    <div class="box">
        <img src="/slike/search.png" alt="">
        <h3>Turisticki vodic</h3>
    </div>

    <div class="box">
        <img src="/slike/online-learning.png" alt="">
        <h3>Vještine 21.vijeka</h3>
    </div>

    <div class="box">
        <img src="/slike/fire.png" alt="">
        <h3>Kampovanje</h3>
    </div>

    <div class="box">
        <img src="/slike/learning.png" alt="">
        <h3>Edukacija</h3>
    
    </div>
</div>


</section>

<!--services section ends -->

<!--home about section starts -->

<section class="home-about">
<div class="image">
    <img src="slike/5740648.jpg" alt="">
</div>
<div class="content"> 
<h3> O Nama </h3>
<p>Misija Univerziteta za poslovni inženjering i menadžment je da, primjenom savremenih metoda obrazovanja povezanim sa naučno-istraživačkim procesom, obrazuje mlade i kvalitetne stručnjake, koji će biti osposobljeni da svojim znanjem i radom podstiču dalji razvoj društva, u skladu sa savremenim evropskim trendovima održivog razvoja.

Osnovna vizija Univerziteta za poslovni inženjering i menadžment u Banjoj Luci je uspostavljanje modernog sistema visokog obrazovanja, prepoznatljivog i kompatibilnog sa odgovarajućim fakultetima u zemljama regiona i članicama EU. Vizija Univerziteta za poslovni inženjering i menadžment u Banjoj Luci je savremena, obrazovna, visokoškolska institucija, priznata po obrazovnim, naučno-istraživačkim i stručnim dostignućima. </p>
<a href="about.php" class="btn">Read More</a>



</div>


</section>
<!--home about section ends -->

<!--home packages section starts --> 
<section class="home-packages">
    <h1 class="heading-title">Our packages</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="slike/students-knowing-right-answer.jpg" alt="">
            </div>
            <div class="content">
<h3> adventure & tour </h3>
<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium repellendus voluptates fuga delectus harum adipisci. Tenetur ducimus ea maiores enim? Dolorem nam quisquam vel dolore adipisci expedita quia, nobis perferendis.
Unde, quisquam aliquam sit nostrum sapiente enim vitae maxime corrupti non cupiditate exercitationem tenetur consectetur dolore excepturi earum consequuntur maiores omnis. Provident veniam facilis in pariatur sapiente. Natus, enim amet?</p>
<a href="book.php" class="btn">Book Now </a>

        
</div>
        </div>





<div class="box">
            <div class="image">
                <img src="slike/students-knowing-right-answer.jpg" alt="">
            </div>
            <div class="content">
<h3> adventure & tour </h3>
<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus incidunt eligendi ex accusantium maiores totam, ipsum nisi cumque reprehenderit aut inventore quae! Repellat tempore unde, dolores corporis nobis laborum accusantium!
Autem, sapiente! Ratione numquam, ipsa eum tempore tempora, non nihil placeat, sequi aliquam provident officiis doloremque? Eius ea incidunt consectetur et debitis alias quibusdam itaque ducimus. Aut iusto laudantium eos.</p>
<a href="book.php" class="btn">Book Now </a>

        
</div>
        </div>


        <div class="box">
            <div class="image">
                <img src="slike/9267.jpg" alt="">
            </div>
            <div class="content">
<h3> adventure & tour </h3>
<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nulla deserunt cum voluptate ipsam, temporibus repudiandae, voluptatem quasi ex blanditiis dignissimos assumenda repellat praesentium rem dolor voluptas itaque! Nisi, tempore?
Nisi, magnam iusto? Officiis officia tenetur, nihil veniam incidunt iste et culpa nostrum voluptatum fuga cumque ipsam molestias quisquam laborum dolores accusantium velit repudiandae quia neque repellat? Deserunt, quia eligendi?</p>
<a href="book.php" class="btn">Book Now </a>

        
</div>
        </div>
    </div>

        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
</section>



<!--home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
<div class="content">
    <h3>Ostvari 20% popusta</h3>
    <p> Ukoliko se prijavite sada sa još dva prijatelja, ostvarujete dodatnih 20% popusta na aranžman u Evropi. Broj je ograničen. Požurite, iskoristite priliku!
    
</p>


<a href="book.php" class="btn">Book Now</a>

</div>
</section>
<!-- home offer section ends  -->





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