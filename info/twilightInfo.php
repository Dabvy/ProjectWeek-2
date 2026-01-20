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
        <img src="../images/twilight.jpg" width="350px" height="500px">
    </div>

    <div class="product-info">
      <h1>Twilight</h1>
      <p class="description">
    Twilight gaat over de zeventienjarige Bella Swan, die naar het regenachtige stadje Forks verhuist om bij haar vader te wonen. 
    Daar wordt ze verliefd op de mysterieuze Edward Cullen, die al snel een vampier blijkt te zijn. Ondanks het gevaar dat dit met zich meebrengt, groeit hun liefde. 
    Bella raakt betrokken bij de wereld van vampiers en komt in levensgevaar door een vijandige vampier. 
    Edward en zijn familie beschermen haar, en het verhaal draait om liefde, spanning en de keuze tussen een normaal leven en een gevaarlijke, 
    bijzondere wereld.
    <a href="../beschikbaarheid.php">
      <button>Bekijk Beschikbaarheid</button>
    </a>
    </div>
        <div class="rating">
          ★★★★☆ <span style="color: #f0f0f0f0; font-size: 0.9rem;">(3.8 / 5)</span>
      </div>
  </div>
  </div>

</body>
</html>
