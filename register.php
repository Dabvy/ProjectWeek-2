<?php
require "db.php";

$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (empty($username) || empty($email) || empty($password)) {
        $message = "All fields are required.";
        $messageType = "error";
    } else {
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user
        $sql = "INSERT INTO users (username, email, password)
                VALUES (:username, :email, :password)";
        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute([
                ":username" => $username,
                ":email" => $email,
                ":password" => $hashedPassword
            ]);
            $message = "Registration successful! You can login.";
            $messageType = "success";
        } catch (PDOException $e) {
            $message = "Username or email already exists.";
            $messageType = "error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Bibliotheek Zoetermeer</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <style>
        .popup {
            position: fixed;
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
            padding: 15px 30px;
            border-radius: 6px;
            font-family: Montserrat, sans-serif;
            font-size: 14px;
            color: white;
            z-index: 9999;
            animation: slideDown 0.6s ease forwards, fadeOut 0.6s ease 3.5s forwards;
        }

        .popup.success {
            background-color: #4CAF50;
        }

        .popup.error {
            background-color: #e74c3c;
        }

        @keyframes slideDown {
            from {
                top: -100px;
            }
            to {
                top: 20px;
            }
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                top: -100px;
            }
        }
    </style>
</head>
<body>

<?php if (!empty($message)): ?>
    <div class="popup <?= $messageType ?>">
        <?= htmlspecialchars($message) ?>
    </div>
<?php endif; ?>

<nav>
    <div class="nav-container">
        <a href="main.php">
            <img src="images/logoBIB.png" alt="logo" class="logo">
        </a>
        <ul id="nav-links"></ul>
    </div>
</nav>

<div class="form-container">
    <form method="POST" class="login-form">
        <input type="text" name="username" placeholder="Gebruikersnaam" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Register</button>
        <a class="register-link" href="login.php">
            Heb je al een account? Log in hier
        </a>
    </form>
</div>

</body>
</html>
