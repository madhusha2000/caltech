<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="assest/style.css">
</head>
<body>
<div class="container">
    <?php @include 'header.php'?>


    <section class="about">

    <div class="aboutus" >   
    
    <h3>about <span>us</span></h3>

    </div>

    <div class="contents">

    <div class="about-contents">
    <p>Achieving the social responsibilities of building a better human to the tomorrow world</p>

    <a href="contact.php" class="btn">contact us</a>

    </div>

    <div class="aboutimage">
        <img src="image/about.jpg" alt="">
    </div>
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(image/image4.jpg) no-repeat; min-height: 60rem;
    border-radius: 5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    padding:2rem;
    margin-bottom:4rem;
    background-size:cover !important;
    background-position:center !important;">
            
                <div class="content">
                    <h3>Our Mission</h3>
                    <p>Empowering people to create sustainable world.</p>

                    <a href="services.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(image/image5.jpg) no-repeat; min-height: 60rem;
    border-radius: 5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    padding:2rem;
    margin-bottom:4rem;
    background-size:cover !important;
    background-position:center !important;">
            
                <div class="content">
                    <h3>Our Vision</h3>
                    <p>A sustainable world from a productive man.</p>

                    <a href="services.php" class="btn">discover more</a>

                    
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(image/goal.jpg) no-repeat; min-height: 60rem;
    border-radius: 5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    padding:2rem;
    margin-bottom:4rem;
    background-size:cover !important;
    background-position:center !important;">
            
                <div class="content">
                    <h3>Our Goal</h3>
                    <p>Building attitude to achieve sustainable development goal.</p>

                    <a href="about.php" class="btn">discover more</a>
                </div>
            </div>

            
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="team">
        <h1 class="heading">Our team</h1>

        <div class="swiper team-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="image/download.jpg" alt="">

                    <div class="content">
                        <h3>Sumith Dammika</h3>
                        <p>"Nutrition is generally aimed at improving the quality of life of the community irrespective of political parties, religions, nationality or caste.”</p>
                        <div class="share">
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-whatsapp-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="image/image11.jpg" alt="">

                    <div class="content">
                        <h3>Palitha Athapaththu</h3>
                        <p>"It's affirming that has no age limit, depute young or old everyone join hands together in helping each others."</p>
                        <div class="share">
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-whatsapp-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="image/download.jpg" alt="">

                    <div class="content">
                        <h3>Ruwan Senarath</h3>
                        <p>"If we do good effective service  to the society, we will move forward no matter what the obstacles are”</p>
                        <div class="share">
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-whatsapp-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="image/image11.jpg" alt="">

                    <div class="content">
                        <h3>Sumith Dammika</h3>
                        <p>Nutrition is generally aimed at improving the quality of life of the community irrespective of political parties, religions, nationality or caste.”</p>
                        <div class="share">
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-whatsapp-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="counting">
        <div class="counter-wrapper">
            <div class="counter">
                <h1 class="count" data-target="1818">0</h1>
                <p> No of Members</p>
            </div>

            <div class="counter">
                <h1 class="count" data-target="55">0</h1>
                <p> Programmes Amount</p>
            </div>

            <div class="counter">
                <h1 class="count" data-target="1919">0</h1>
                <p> No of Officers</p>
            </div>

            <div class="counter">
                <h1 class="count" data-target="594594">0</h1>
                <p> No of Members</p>
            </div>
        </div>
    </section>
   

    <?php @include 'footer.php'?>
    </div>

    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script src="assest/script.js"></script>
</body>
</html>