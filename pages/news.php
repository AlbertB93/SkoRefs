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
    <div class="news--container">
      <div class="news--title--box">
        <h2>Archiwum wiadomości</h2>
      </div>
      <div class="news--box">
        <div class="news">
          <div class="news--file">
            <img src="../images/testObsada.jpg" alt="FELEK" class="news--file--photo" />
          </div>
          <div class="news--title">Rozkład jazdy na weekend</div>
        </div>
        <div class="news">
          <div class="news--file">
            <img src="../images/felek.png" alt="FELEK" class="news--file--photo" />
          </div>
          <div class="news--title">
            Podsumowanie rundy jesiennej </br> sezonu 2022 / 2023 ŚZPN
          </div>
        </div>
        <div class="news">
          <div class="news--file">
            <img src="../images//egzaminySala.jpg" alt=" FELEK" class="news--file--photo" />
          </div>
          <div class="news--title">EGZAMINY 1 TERMIN</div>
        </div>
        <div class="news">
          <div class="news--file">
            <img src="../images/OBSADA.png" alt="FELEK" class="news--file--photo" />
          </div>
          <div class="news--title">OBSADA 11-12.10.2023</div>
        </div>
      </div>
      <div class="news--buttons--box">
        <button class="news--buttons">1</button>
        <button class="news--buttons">
          <a href="../pages/news/news--page--002.php">2</a>
        </button>
        <button class="news--buttons">
          <a href="../pages/news/news--page--003.php">3</a></button>
        <button class="news--buttons">...</button>
      </div>
    </div>
  </main>

  <footer>
    <div class="footer-text">Copyright Albert</div>
  </footer>
</body>

</html>