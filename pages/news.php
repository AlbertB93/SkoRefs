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
          <a href="news/news026-clipOfTheWeek-S2324E2F1L2.php">Kilp tygodnia <br> 2 kolejka PKO BP Ekstraklasy </br> 2 kolejka Fortuna 1 Ligi</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news026.PNG" alt="okładka-gazetka-sędzia-2-2023" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 04.08.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news/news025-clipOfTheWeek-S2324E1.php">Kilp tygodnia <br> 1 kolejka PKO BP Ekstraklasy</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news025.PNG" alt="Kuba-Chrzanowski" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 04.08.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news/news024-Sedzia-2-2023.php">Gazetka "Sędzia" 2/2023</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news024.png" alt="okładka-gazetka-sędzia-2-2023" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 12.07.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news/news023-Core-Kuba.php">Kuba Chrzanowski w programie <br> CORE POLSKA !</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news023.PNG" alt="Kuba-Chrzanowski" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 10.06.2023r. - Bercik
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