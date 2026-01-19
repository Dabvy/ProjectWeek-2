<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <title>Bibliotheek Zoetermeer</title>
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
        <h1 id="header">Beschikbaarheden</h1>
        <p id="subHeader">Beschikbaarheden van elk boek.</p>
    </div>

        <?php if (isset($_SESSION["user_id"])): ?>
            <a class="boeken-container" href="bookQuiz.php">BOEKEN QUIZ</a>
        <?php endif; ?>

    </div>

    <div class="openTime-container">
        <h1 id="openTime">Boeken</h1>
        <p id="time">Forum Zoetermeer:
            
        </p>


    </div>

    <footer>
        <p>Stadhuisplein 1, 2711 EC Zoetermeer</p>
        <p>079 343 8200</p>
    </footer>

    <script src="javascript.js"></script>
</body>
</html>