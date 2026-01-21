<!DOCTYPE html>


<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheek Zoetermeer</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
<body class="min-h-screen bg-gray-100 p-6">

<div class="flex justify-end">
<input id="searchInput" type="text" placeholder="Search a book and press Enter..."
class="w-72 px-4 py-2 border rounded-xl shadow-sm focus:outline-none focus:ring"
/>
</div>


<script>
const bookPages = {
  "the lord of the rings": "info/theLordOTRingsInfo.php",
  "animal farm": "info/animalFarmInfo.php",
  "de brief voor de koning": "info/deBriefVDKoningInfo.php",
  "1984": "info/1984Info.php",
  "de griezelbus": "info/deGriezelbusInfo.php",
  "de hobbit": "info/deHobbitInfo.php",
  "divergent": "info/divergentInfo.php",
  "dracula": "info/draculaInfo.php",
  "harry potter": "info/harryPotter.php",
  "het gouden ei": "info/hetGoudenEiInfo.php",
  "it": "info/itInfo.php",
  "moby dick": "info/mobyDickInfo.php",
  "percy jackson": "info/percyJacksonInfo.php",
  "pride and prejudice": "info/prideAndPrejudiceInfo.php",
  "robinson crusoe": "info/robinsonCrusoeInfo.php",
  "sherlock holmes": "info/sherlockHolmes.php",
  "the alchemist": "info/theAlchemistInfo.php",
  "the da vinci code": "info/theDaVinciCodeInfo.php",
  "the fault in our stars": "info/theFaultinourStarsInfo.php",
  "the hunger games": "info/theHungerGamesInfo.php",
  "the maze runner": "info/theMazeRunnerInfo.php",
  "the shining": "info/theShiningInfo.php",
  "het achterhuis": "info/hetAchterhuisInfo.php",
  "twilight": "info/twilightInfo.php",
  "kruistocht in spijkerbroek": "info/kruistochtInSpijkerbroekInfo.php"
};

const searchInput = document.getElementById("searchInput");

// 2 strings: A= bornstring. B= Doelstring
function levenshtein(a, b) {
  const matrix = Array.from({ length: b.length + 1 }, (_, i) => [i]);

  for (let j = 0; j <= a.length; j++) {
    matrix[0][j] = j;
  }

  // loopt door alle combinaties van letters van a en b
  for (let i = 1; i <= b.length; i++) {
    for (let j = 1; j <= a.length; j++) {
      matrix[i][j] = b[i - 1] === a[j - 1]
        ? matrix[i - 1][j - 1]
        : Math.min(
            matrix[i - 1][j - 1] + 1,
            matrix[i][j - 1] + 1,
            matrix[i - 1][j] + 1
          );
    }
  }

  return matrix[b.length][a.length];
}

// Luistert naar toetsaanslagen in de zoekbalk
searchInput.addEventListener("keydown", (event) => {
  if (event.key === "Enter") { 
    const query = searchInput.value.toLowerCase().trim();

    let bestMatch = null;
    let smallestDistance = Infinity;

    for (const key in bookPages) {
      const distance = levenshtein(query, key);

      if (distance < smallestDistance) {
        smallestDistance = distance;
        bestMatch = key;
      }
    }

    // drempel: hoe lager, hoe strenger
    if (smallestDistance <= 5 && bestMatch) {
      window.location.href = bookPages[bestMatch];
    } else {
      alert("Book not found. Please try another title.");
    }
  }
});
</script>

    <nav>
        <div class="nav-container">
            <a href="main.php"><img src="images/logoBIB.png" alt="logo" class="logo"></a>
            <ul id="nav-links">
            </ul>
            <ul id="results"></ul>
          </div>
        </div>
    </nav>

    <div class="text-container">
        <h1 id="header">Bibliotheek Forum</h1>
        <p id="subHeader">Bibliotheek Forum Zoetermeer is de grootste publieke en culturele instelling in Zoetermeer.
            <br>
            Wij hebben een missie geformuleerd en een visiebepaling voor de lange termijn gemaakt.
        </p>
    </div>

<div class="white-stripe"></div>
    <div class="text-container">

    </div>

<div class="row">
    <div class="column">
      <img src="images/animalFarm.jpg" class="product-image">

      <h3 class="product-title">Animal Farm</h3>
      <p class="product-description">Genre: Dystopia</p>

      <div class="product-body">
      <a href="info/animalFarmInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/hetAchterhuis.jpg" class="product-image">

      <h3 class="product-title">Het Achterhuis</h3>
      <p class="product-description">Genre: History</p>

      <div class="product-body">
        <a href="info/hetAchterhuisInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

        <div class="column">
      <img src="images/theAlchemist.jpg" class="product-image">

      <h3 class="product-title">The Alchemist</h3>
      <p class="product-description">Genre: Philosophy</p>

      <div class="product-body">
        <a href="info/theAlchemistInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/deBriefVoorDeKoning.jpg" class="product-image">

      <h3 class="product-title">De brief voor de koning</h3>
      <p class="product-description">Genre: Adventure</p>

      <div class="product-body">
        <a href="info/deBriefVDKoningInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/divergent.jpg" class="product-image">

      <h3 class="product-title">Divergent</h3>
      <p class="product-description">Genre: Dystophia</p>

      <div class="product-body">
        <a href="info/divergentInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/dracula.jpg" class="product-image">

      <h3 class="product-title">Dracula</h3>
      <p class="product-description">Genre: Horror</p>

      <div class="product-body">
        <a href="info/draculaInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/theDaVinciCode.jpg" class="product-image">

      <h3 class="product-title">The Da Vinci code</h3>
      <p class="product-description">Genre: Crime</p>

      <div class="product-body">
        <a href="info/theDaVinciCodeInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/theFaultInOurStars.jpg" class="product-image">

      <h3 class="product-title">The fault in our stars</h3>
      <p class="product-description">Genre: Romance</p>

      <div class="product-body">
        <a href="info/theFaultinourStarsInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/deGriezelbus.jpg" class="product-image">

      <h3 class="product-title">De Griezelbus</h3>
      <p class="product-description">Genre: Horror</p>

      <div class="product-body">
        <a href="info/deGriezelBusInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/hetGoudenEi.jpg" class="product-image">

      <h3 class="product-title">Het Gouden ei</h3>
      <p class="product-description">Genre: Crime</p>

      <div class="product-body">
        <a href="info/hetGoudenEiInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/harryPotter.jpg" class="product-image">

      <h3 class="product-title">Harry Potter</h3>
      <p class="product-description">Genre: Fantasy</p>

      <div class="product-body">
        <a href="info/harryPotterInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/deHobbit.jpg" class="product-image">

      <h3 class="product-title">De Hobbit</h3>
      <p class="product-description">Genre: Fantasy</p>

      <div class="product-body">
        <a href="info/deHobbitInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/theHungerGames.jpg" class="product-image">

      <h3 class="product-title">The Hunger games</h3>
      <p class="product-description">Genre: Dystophia</p>

    <div class="product-body">
      <a href="info/theHungerGamesInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/itBook.jpg" class="product-image">

      <h3 class="product-title">IT</h3>
      <p class="product-description">Genre: Horror</p>

      <div class="product-body">
        <a href="info/itInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/theLordOfTheRings.jpg" class="product-image">

      <h3 class="product-title">The Lord of the Rings</h3>
      <p class="product-description">Genre: Fantasy</p>

      <div class="product-body">
        <a href="info/theLordOTRingsInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/theMazeRunner.jpg" class="product-image">

      <h3 class="product-title">The Maze Runner</h3>
      <p class="product-description">Genre: Dystophia</p>

      <div class="product-body">
        <a href="info/theMazeRunnerInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/kruistochInSpijkerbroek.jpg" class="product-image">

      <h3 class="product-title">Kruistocht in Spijkerbroek</h3>
      <p class="product-description">Genre: History</p>

      <div class="product-body">
        <a href="info/kruistochtInSpijkerboekInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/mobyDick.jpg" class="product-image">

      <h3 class="product-title">Moby Dick</h3>
      <p class="product-description">Genre: Adventure</p>

      <div class="product-body">
        <a href="info/mobyDickInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/prideAndPrejudice.jpg" class="product-image">

      <h3 class="product-title">Pride and Prejudice</h3>
      <p class="product-description">Genre: Romance</p>

      <div class="product-body">
        <a href="info/prideAndPrejudiceInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/percyJackson.jpg" class="product-image">

      <h3 class="product-title">Percy Jackson</h3>
      <p class="product-description">Genre: Fantasy</p>

      <div class="product-body">
        <a href="info/percyJacksonInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/robinsonCrusoe.jpg" class="product-image">

      <h3 class="product-title">Robinson Crusoe</h3>
      <p class="product-description">Genre: Adventure</p>

      <div class="product-body">
        <a href="info/robinsonCrusoeInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/sherlockHolmes.jpg" class="product-image">

      <h3 class="product-title">Sherlock Holmes</h3>
      <p class="product-description">Genre: Crime</p>

      <div class="product-body">
        <a href="info/sherlockHolmesInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

    <div class="column">
      <img src="images/theShining.jpg" class="product-image">

      <h3 class="product-title">The Shining</h3>
      <p class="product-description">Genre: Horror</p>

      <div class="product-body">
        <a href="info/theShiningInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

        <div class="column">
      <img src="images/twilight.jpg" class="product-image">

      <h3 class="product-title">Twilight</h3>
      <p class="product-description">Genre: Romance</p>

      <div class="product-body">
        <a href="info/twilightInfo.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>

        <div class="column">
      <img src="images/1984Book.jpg" class="product-image">

      <h3 class="product-title">1984</h3>
      <p class="product-description">Genre: Dystophia</p>

      <div class="product-body">
        <a href="info/1984Info.php">
        <button class="info-btn">Meer informatie</button>
        </a>
      </div>
    </div>
</div>
</body>

