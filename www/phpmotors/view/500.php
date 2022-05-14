<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PHP Motors</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Share+Tech&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/phpmotors/css/styles.css">
</head>

<body>
    <div class="page">
        <header>
            <?php require($_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'); ?>
        </header>
        <nav>
        <?php //require($_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/nav.php'); 
            echo $navlist;?>
        </nav>
        <main>
            <section>
                <h1>Server Error</h1>
                <div class="container">
                <p>Sorry our server seems to be experiencing some technical dificulties</p>
                </div>
            </section>
        </main>
        <footer>
             <?php require($_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'); ?>
        </footer>
    </div>
</body>

</html>