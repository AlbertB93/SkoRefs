<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skarżyskie Gwizdki</title>
  <link rel="stylesheet" href="../scss/style-gallery.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@600;700&family=Oswald&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="/images/favicon.png">

</head>

<body>
  <?php include("../php/header--pages.php"); ?>
  <?php include("../php/nav--pages.php"); ?>

  <main>
    <div class="popup--sourcesPhotos">
      <p style="text-indent: 25px;"> Część zdjęć w galerii pochodzi z prywatnych zbiorów naszych sędziów. Nie jestem w stanie dotrzeć do autora każdego zdjęcia w galerii.
        Jeśli zauważyłeś zdjęcie Twojego autorstwa na stronie, a nie uwzględniłem Cię w źródłach zdjęć na stronie, proszę o kontakt, wtedy bezzwłocznie umieszcze Cię w tym miejscu.
        Jeśli nie wyrażasz zgody na publikację zdjęcia Twojego autorstwa również proszę o kontakt, od razu po odczytaniu wiadomości usunę zdjęcie z galerii.</p>
      <div class="popup--sourcesPhotos--title">
        <h2>Źródła zdjęć: </h2>
        <button class="popup--sourcesPhotos--title--closeBtn" onclick="closePopupSourcesPhotos()">X</button>
      </div>
      <div class="popup--sourcesPhotos--description">

        <li> kieleckapilka.pl</li>
        <li> https://www.facebook.com/Pogon1945</li>
        <li> Słoka Photography: https://www.facebook.com/sloka.foto</li>
        <li> Dorota Prokop Foto: https://www.facebook.com/profile.php?id=100084574719208</li>
        <li> https://echodnia.eu/swietokrzyskie/ </li>
        <li> https://www.facebook.com/mzksalitozarow </li>
        <li> https://www.facebook.com/star1926 </li>
        <li> Radosław Piasecki fotografia: https://www.facebook.com/radoslawpiaseckifotografia</li>
      </div>
    </div>
    <div class="container--title">
      <div class="title">
        Skarżyskie Gwizdki w obiektywie
      </div>
    </div>
    <div class="gallery--container" id="1">
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="gallery--photo--field"></div>
      <div class="buttons--box">
        <div class="buttons--box--container">
          <button class="buttons--box--container--buttons--active">
            <a href="gallery.php">1</a>
          </button>
          <button class="buttons--box--container--buttons">
            <a href="gallery002.php">2</a>
          </button>
          <button class="buttons--box--container--buttons">
            <a href="gallery003.php">3</a>
          </button>
          <button class="buttons--box--container--buttons">
            <a href="gallery004.php">4</a>
          </button>
          <button class="buttons--box--container--buttons">
            <a href="gallery005.php">5</a>
          </button>
        </div>
        <div class="buttons--box--sources">
          <button class="buttons--box--sources--btn" onclick="openPopupSourcesPhotos()">
            Źródła zdjęć
          </button>
        </div>
      </div>
    </div>

    <div class="popupGallery hidden">
      <button class="popupCloseBtn">X</button>
      <img src="../images/gallery/g8.jpg" alt="" class="popupGallery--img" />
      <button class="popupArrow--right">
        <div class="text">></div>
      </button>
      <button class="popupArrow--left">
        <div class="text">
          < </div>
        </div>
    </div>
  </main>
  <?php include("../php/footer.php"); ?>
  <script src="../app.js"></script>
</body>


</html>