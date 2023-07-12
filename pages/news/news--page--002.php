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
        <article>
          <a href="news/news020-clipOfTheWeekE31.php">Klip tygodnia</br> 31 kolejka PKO BP Ekstraklasy</a>
          <div class="article--image">
            <img src="../../images/pages/news-logo/news020.png" alt="piłkarze-Korona-Raków" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 11.05.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news019-clipOfTheWeekE29.php">Klip tygodnia</br> 29 kolejka PKO BP Ekstraklasy</a>
          <div class="article--image">
            <img src="../../images/pages/news-logo/news019.png" alt="Piotr-Wlazło" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 29.04.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news018-clipOfTheWeekE28.php">Klip tygodnia</br> 28 kolejka PKO BP Ekstraklasy</a>
          <div class="article--image">
            <img src="../../images/pages/news-logo/news018.jpg" alt="bramkarz-Cracovia-Karol-Niemczycki" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 21.04.2023r. - Bercik
          </div>
        </article>
        <article>
          <a href="news017.php">Ania i Kasia na arenie międzynarodowej!</a>
          <div class="article--image">
            <img src="../../images/pages/news-logo/news017.jpg" alt=" Ania-i-Kasia" class="article--image--file" />
          </div>
          <div class="dataAuthor">
            Data dodania - autor: 15.04.2023r. - Bercik
          </div>
        </article>
      </div>
      <div class="buttons--box">
        <div class="buttons--box--container">
          <button class="buttons--box--container--buttons">
            <a href="../news.php">1</a>
          </button>
          <button class="buttons--box--container--buttons--active">
            <a href="news--page--002.php">2</a>
          </button>
          <button class="buttons--box--container--buttons">
            <a href="news--page--003.php">...</a>
          </button>
        </div>
      </div>
    </div>
  </main>
  <?php include("../../php/footer.php"); ?>
</body>

</html>