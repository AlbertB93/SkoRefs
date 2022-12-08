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
        <h2>Archiwum wiadomości</h2>
      </div>
      <div class="news--box"></div>
      <div class="news--buttons--box">
        <button class="news--buttons">
          <a href="../news.php">1</a>
        </button>
        <button class="news--buttons">
          <a href="news--page--002.php">2</a>
        </button>
        <button class="news--buttons--active">
          <a href="news--page--003.php">3</a>
        </button>
        <button class="news--buttons">...</button>
      </div>
    </div>
  </main>

  <footer>
    <div class="footer-text">Copyright Albert</div>
  </footer>
</body>

</html>