<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PHP Motors</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Share+Tech&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" media="screen" href="../css/styles.css">
</head>

<body>
    <div class="page">
        <header>
            <?php require($_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'); ?>
        </header>
        <nav>
        <?php //require($_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/nav.php'); 
        echo $navlist;
        ?>
        </nav>

        <main>
            <section>
                <h1>Sign In</h1>
                <form action="/accounts/" method="POST">
                <label>Email</label>
                <br>
                <input name="clientEmail" id="clientEmail" type="email" required>
                <br><br>
                <label>Password</label>
                <br>
                <input name="clientPassword" id="clientPassword" type="password">
                <br><br>
                <input type="submit" name="submit" id="signinbtn" value="Sign in">
                
                <input type="hidden" name="action" value="Login">
            </form>
            <p>
                <a href = '../accounts/index.php?action=registration'>Not a member yet?</a>
            </p>

                
            </section>
        </main>
        <footer>
             <?php require($_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'); ?>
        </footer>
    </div>
</body>

</html>