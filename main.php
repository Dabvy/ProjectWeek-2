<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <title>Bibliotheek Zoetermeer</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>

<body>
    <nav>
        <div class="nav-container">
            <a href="main.php"><img src="images/logoBIB.png" alt="logo" class="logo"></a>
            <ul id="nav-links">

                <?php if (!isset($_SESSION["user_id"])): ?>
                    <a href="login.php">Log in</a>
                <?php else: ?>
                    <span>Welkom, <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
                    <a href="logout.php">Log out</a>
                <?php endif; ?>

            </ul>
        </div>
    </nav>

    <div class="text-container">
        <h1 id="header">Bibliotheek Forum</h1>
        <p id="subHeader">Bibliotheek Forum Zoetermeer is de grootste publieke en culturele instelling in Zoetermeer.
            <br>
            Wij hebben een missie geformuleerd en een visiebepaling voor de lange termijn gemaakt.
        </p>
    </div>

    <div class="buttons-container">
        <a class="readMore-container" href="main.php">LEES MEER</a>
        <a class="boeken-container" href="books.php">BOEKEN</a>

        <?php if (isset($_SESSION["user_id"])): ?>
            <a class="boeken-container" href="bookQuiz.php">BOEKEN QUIZ</a>
        <?php endif; ?>

    </div>

    <div class="openTime-container">
        <h1 id="openTime">Openingstijden</h1>
        <p id="time">Forum Zoetermeer 08:00 - 20:00</p>
        <p id="time">Wijkbibliotheek Oosterheem 08:00 - 20:00</p>
        <p id="time">Wijkbibliotheek Rokkeveen 08:00 - 20:00</p>
    </div>

    <footer>
        <p>Stadhuisplein 1, 2711 EC Zoetermeer</p>
        <p>079 343 8200</p>
    </footer>

    <script src="javascript.js"></script>
</body>
</html>