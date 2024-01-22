<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <?php @include 'header.php'?>

    <div class="container">
    <h3 class="center-text">Recent Work</h3>
    <div id="instafeed-container"></div>
    <button id="show-more-btn">Show More</button>

    </div>
  

    <?php @include 'footer.php'?>
    </div>

    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>