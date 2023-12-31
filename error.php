<head>
    <html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/reset.css">
    <link rel="stylesheet" type="text/css" href="styles/mobile.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="styles/desktop.css">
    <link rel="stylesheet" type="text/css" href="styles/error.css">
    <title>Error</title>
</head>

<body>
    <header>
    </header>

    <main>
        <div id="error-page">
            <section class="error-bloc">
                <div class="error-content">
                    <div class="error-title">
                        <h2>Error !</h2>
                    </div>
                    <div>
                    <p>Mmmh something got wrong !</br>
                        Please fill out the form fields correctly otherwise I will not be able to access your request !</br>
                        <ul>
                            <?php foreach($errors as $error) : ?>
                                <li><?= $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <img src ="/assets/geralt-error.jpg" alt="Geralt nude taking a bath">
                    </p>
                </div>
            </section>
        </div>

    </main>

    <div id="cta">
        <a id="hire-me" href="index.php">HOME</a>
    </div>

    <footer>
    </footer>

</body>
</html>