<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PHP Motors</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Share+Tech&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <div class="page">
    <div class="page">
        <header>
            <?php require($_SERVER['DOCUMENT_ROOT'].'/snippets/header.php'); ?>
        </header>
        <nav>
         <?php require($_SERVER['DOCUMENT_ROOT'].'/snippets/nav.php'); ?>
        </nav>

        <main>
            <section>
                <h1>Welcome to PHP Motors!</h1>
                <div class="container">
                <h2>DMC Delorean</h2>
                    <p>
                        3 Cup holders<br> Superman doors<br> Fuzzy dice!<br>
                    </p>
                    <a href="#" class="button">
                        Own Today
                    </a>
                    <img src="/phpmotors/images/delorean.jpg" alt="Delorean">
                    
                </div>
            </section>
                <div class="upgrade">
                <h2>Delorean Upgrades</h2>
                 <div class='itens'>
                    <div class="item">
                        <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux Capacitor">
                        <a href="#">Flux Capacitor</a>
                    </div>
                    <div class="item">
                        <img src="/phpmotors/images/upgrades/flame.jpg" alt="Flame Decal">
                        <a href="#">Flame Decals</a>
                    </div>
                    <div class="item">
                        <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper Sticker">
                        <a href="#">Bumper Sticker</a>
                    </div>
                    <div class="item">
                        <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Cap">
                        <a href="#">Hub Caps</a>
                    </div>
</div>
                </div>
                <div class="reviews">
                <h2>DMC Delorean Reviews</h2>
                <ul>
                    <li>"So fast its almost like traveling in time." (4/5)</li>
                    <li>"Coolest ride on the road." (4/5)</li>
                    <li>"I'm feeling Marty McFly!" (5/5)</li>
                    <li>"The most futuristic ride of our day." (4/5)</li>
                    <li>"80's livin and I love it!" (5/5)</li>
                </ul>
                </div>
        </div>
        </main>
        <footer>
             <?php require($_SERVER['DOCUMENT_ROOT'].'/snippets/footer.php'); ?>
        </footer>
    </div>
</body>

</html>