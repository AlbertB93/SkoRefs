<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skarżyskie Gwizdki</title>
  <link rel="stylesheet" href="../scss/style-news.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@600;700&family=Oswald&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="/images/favicon.png">
</head>

<body>
  <?php include("../php/header--pages.php"); ?>
  <?php include("../php/nav--pages.php"); ?>
  <main>
    <div class="container--title">
      <div class="title">
        Archiwum wiadomości
      </div>
    </div>
    <div class="news--container">
      <div class="news--box">
        <article>
          <a href="news/news045-clipOfTheWeek-S2324E17.php">Kilp tygodnia <br> 17 kolejka PKO BP Ekstraklasy</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news045.PNG" alt="piłkarz-Cracovii" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 08.12.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news/news044-clipOfTheWeek-S2324E16.php">Kilp tygodnia <br> 16 kolejka PKO BP Ekstraklasy</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news044.PNG" alt="Mosór-i-Pululu" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 04.12.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news/news043-clipOfTheWeek-S2324E15.php">Kilp tygodnia <br> 15 kolejka PKO BP Ekstraklasy</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news043.PNG" alt="Murawski-Ślisz" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 23.11.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news/news042-Ania-Kasia-tvp-sport.php">Ania i Kasia sędziami meczu na <br> TVP SPORT!</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news042.jpg" alt="Ania-Kasia-Angelika" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 11.11.2023r. - Bercik
          </div>
        </article>
      </div>
      <div class="buttons--box">
        <div class="buttons--box--container">
          <button class="buttons--box--container--buttons--active">
            <a href="news.php">1</a>
          </button>
          <button class="buttons--box--container--buttons">
            <a href="news/news--page--002.php">2</a>
          </button>
          <button class="buttons--box--container--buttons">
            <a href="news/news--page--003.php">...</a>
          </button>
        </div>
      </div>
    </div>
  </main>
  <?php include("../php/footer.php"); ?>
</body>

</html>