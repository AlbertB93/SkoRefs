<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skarżyskie Gwizdki</title>
  <link rel="stylesheet" href="../../scss/style-news.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@600;700&family=Oswald&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="/images/favicon.png">
</head>

<body>
  <?php include("../../php/header--pages--news.php"); ?>
  <?php include("../../php/nav--pages--news.php"); ?>

  <main>
    <div class="container--title">
      <div class="title">
        Archiwum wiadomości
      </div>
    </div>
    <div class="news--container">
      <div class="news--box">
        <article id="article--1">
          <a href="news001.php">Witamy na stronie !</a>
          <div class="article--image">
            <img src="../../images/pages/news-logo/news001.png" alt="ręka" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 30.12.2022r. - Bercik
          </div>
        </article>
      </div>
      <div class="buttons--box">
        <button class="buttons--box--buttons">
          <a href="../news.php">1</a>
        </button>
        <button class="buttons--box--buttons--active">
          <a href=" news--page--002.php" style="background-color: orange; color:black;">2</a>
        </button>
        <!--         <button class="news--buttons">
          <a href="news--page--003.php">3</a>
        </button>
        <button class="news--buttons">...</button> -->
      </div>
    </div>
  </main>
  <?php include("../../php/footer.php"); ?>
</body>

</html>