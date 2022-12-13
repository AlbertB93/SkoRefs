<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TS Skarżysko</title>
  <link rel="stylesheet" href="../scss/style-news.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@600;700&family=Oswald&display=swap" rel="stylesheet" />
</head>

<body>
  <?php include("../php/header--pages.php"); ?>
  <?php include("../php/nav--pages.php"); ?>
  <main>
    <div class="container--title">
      Archiwum wiadomości
    </div>
    <div class="news--container">
      <div class="news--box">
        <article id="article--5">
          <a href="news/news005.php">Nasze dziewczyny w rozgrywkach kobiecych - podsumowanie rundy</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news005.jpg" alt="przywitanie-sędziów-z-kapitanami" class="article--image--file" />
          </div>
        </article>
        <article id="article--4">
          <a href="news/news004.php">Podsumowanie rundy jesiennej sezonu 2022 / 2023 Centrala</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news004.jpg" alt="sędzia-asystent-chorągiewka" class="article--image--file" />
          </div>
        </article>
        <article id="article--3">
          <a href="news/news003.php">Podsumowanie rundy jesiennej sezonu 2022 / 2023 ŚZPN</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news003.jpg" alt="losowanie sędziego z kapitanami" class="article--image--file" />
          </div>
        </article>
        <article id="article--2">
          <a href="news/news002.php">ZAPISZ SIĘ NA KURS!</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news002.jpg" alt="plakat-kurs-sedziowski" class="article--image--file" />
          </div>
        </article>
      </div>
      <div class="news--buttons--box">
        <button class="news--buttons--active">
          <a href="news.php">1</a>
        </button>
        <button class="news--buttons">
          <a href="news/news--page--002.php">2</a>
        </button>
        <!--         <button class="news--buttons">
          <a href="news/news--page--003.php">3</a>
        </button>
        <button class="news--buttons">...</button> -->
      </div>
    </div>
  </main>
  <?php include("../php/footer.php"); ?>
</body>

</html>