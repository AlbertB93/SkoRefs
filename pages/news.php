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
          <a href="news/news010.php">Klip tygodnia</br> 22 kolejka PKO BP Ekstraklasy</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news010.png" alt="Kowalczyk-karny-pośredni" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 02.03.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news/news009.php">Obsada</br> 04-05 marzec 2023r.</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news009.png" alt="Ania-Kasia-Angelika" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 02.03.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news/news008.php">Klip tygodnia</br> 21 kolejka PKO BP Ekstraklasy</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news008.png" alt="Ishak-ręka" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 27.02.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news/news007.php">Startujemy z rundą wiosenną !</a>
          <div class="article--image">
            <img src="../images/pages/news-logo/news007.png" alt="logo-kolegium-sedziów-ŚZPN" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 24.02.2023r. - Bercik
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
            <a href="news/news--page--003.php">3</a>
          </button>
          <!--           <button class="news--buttons">...</button> -->
        </div>
      </div>
    </div>
  </main>
  <?php include("../php/footer.php"); ?>
</body>

</html>