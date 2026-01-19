<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Productpagina</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #0b0a2a;
      margin: 0;
      padding: 0;
    }

    nav {
    padding: 20px 60px;
    }

    .nav-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    }

    .logo {
    width: 42px;
    height: 42px;
}

    .container {
      max-width: 900px;
      margin: 50px auto;
      background: #0f1038;
      padding: 30px;
      display: flex;
      gap: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .product-image img {
      width: 350px;
      border-radius: 10px;
    }

    .product-info h1 {
      margin-top: 0;
      font-size: 28px;
    }

    .description {
      line-height: 1.6;
      margin-bottom: 25px;
      color: white;
    }

    button {
      background: #f28c38;
      color: black;
      border: none;
      padding: 15px 25px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
    }

    button:hover {
      background: #0b0a2a;
    }

    h1{
        color:#f28c38;
    }

    #header {
    font-size: 68px;
    font-weight: bolder;
    color: #f28c38;
    margin-bottom: 16px;
    letter-spacing: 0.5px;
    }

    .text-container {
    padding: 40px 60px 0px;
    max-width: 800px;
    margin-bottom: 100px;
    }
  </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <a href="../main.php"><img src="../images/logoBIB.png" alt="logo" class="logo"></a>
            <ul id="nav-links">
            </ul>
        </div>
    </nav>

    <div class="text-container">
        <h1 id="header">Bibliotheek Forum</h1>
    </div>

  <div class="container">
    <div class="product-image">
        <img src="../images/deBriefVoorDeKoning.jpg" width="350px" height="500px">
    </div>

    <div class="product-info">
      <h1>De Brief voor de Koning</h1>
      <p class="description">
    Tiuri, een jonge schildknaap, 
    krijgt op zijn nacht van ceremonie een geheime brief die naar de koning van een ander land moet worden gebracht. 
    Tijdens zijn gevaarlijke reis ontmoet hij vrienden en vijanden, leert moed en trouw, 
    en ontdekt hij dat dapperheid en verantwoordelijkheid belangrijker zijn dan leeftijd of rang.
      </p>

      <button>Bekijk Beschikbaarheid</button>
    </div>
  </div>

</body>
</html>
