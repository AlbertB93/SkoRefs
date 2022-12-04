<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TS Skarżysko</title>
  <link rel="stylesheet" href="../../scss/style-news.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@600;700&family=Oswald&display=swap" rel="stylesheet" />
</head>

<body>
  <?php include("../../php/header--pages--news.php"); ?>
  <?php include("../../php/nav--pages--news.php"); ?>

  <main>
    <div class="news--container">
      <div class="news--title--box">
        <h2>Archiwum wiadomości 2</h2>
      </div>
      <div class="news--box">
        <article id="article--1">
          <a href="pages/news/news001.html">Witamy na stronie !</a>
          <div class="article--image">
            <img src="../../images/index/hand.png" alt="ręka" class="article--image--file" />
          </div>
        </article>
        <article id="article--1">
          <a href="pages/news/news001.html">Witamy na stronie !</a>
          <div class="article--image">
            <img src="../../images/index/hand.png" alt="ręka" class="article--image--file" />
          </div>
        </article>
        <article id="article--4">
          <a href="pages/news/news004.html">Podsumowanie rundy jesiennej sezonu 2022 / 2023 Centrala</a>
          <div class="article--image">
            <img src="../../images/klip-spalony.png" alt="sędzia-asystent-chorągiewka" class="article--image--file" />
          </div>
        </article>
        <article id="article--1">
          <a href="pages/news/news001.html">Witamy na stronie !</a>
          <div class="article--image">
            <img src="../../images/index/hand.png" alt="ręka" class="article--image--file" />
          </div>
        </article>
      </div>
      <div class="news--buttons--box">
        <button class="news--buttons">
          <a href="../news.php">1</a>
        </button>
        <button class="news--buttons--active">
          <a href=" news--page--002.php" style="background-color: orange; color:black;">2</a>
        </button>
        <button class="news--buttons">
          <a href="news--page--003.php">3</a>
        </button>
        <button class="news--buttons">...</button>
      </div>
    </div>
  </main>

  <footer>
    <div class="footer-text">Copyright Albert</div>
  </footer>
  <script src="../../test.js"></script>
</body>

</html>