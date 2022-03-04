<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="description" content="home of the PHP motors">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Birthstone&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
<script src="js/js.js"></script>
</head>

<body>
<!--  -->

<div class="inside"> 
    <header>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/header.php'; ?>
    </header>

    <nav >
    <?php 
    //require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/navigation.php'; 
    echo $navList;
    ?>
    </nav>

    <div class="content"> 
        <h1 class="title">  WELCOME TO PHP MOTORS</h1>

        <div class="delorean"> 
            <div class="delorean-image">
            <h2 class="description">DMC Delorean</h2>
            <h3 class="description">3 cup holder <br> Superman Doors <br>Fuzzy dice!</h3>
            <h3 id="buy-button">Own today</h3>
            </div>

        <div class="information">
            
        <div class="reviews">
            <h3 class="right">Deloren Reviews</h3>
            <ul>
            <li class="right">"So fast is almost like traveling in time" (4/5)</li>
            <li class="right">"Coolest ride in the road" (4/5)</li>
            <li class="right">"I am feeling Marty Mcfly" (5/5)</li>
            <li class="right">"The most futuristic ride of our day" (4.5/5)</li>
            <li class="right">"80's living and I love it!" (5/5)</li>
            </ul>
            </div>

            <div class="products"> 
            <h4 class="title">Delorean Upgrades</h4>
            <div class="products-images">
            <img class="flux left" src="images/upgrades/flux-cap.png" alt="flux"> <a id="flux-text" href="">Flux Capacitor</a>
            <img class="flame left" src="images/upgrades/flame.jpg" alt="flame"> <a id="flame-text" href="">Flame Decals</a>
            <img class="bumper left" src="images/upgrades/bumper_sticker.jpg" alt="bumper"> <a id="bumper-text" href="">Bumper Stickers</a>
            <img class="hub left" src="images/upgrades/hub-cap.jpg" alt="hub"> <a id="hub-text" href="">Hub Cabs</a>
            </div>
        </div>


        </div>
        </div>
    </div>

    <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/php-motors/snippets/footer.php'; ?>
    </footer>
</div>
</body>
</html>
