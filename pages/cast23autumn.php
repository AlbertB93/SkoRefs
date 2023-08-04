<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skarżyskie Gwizdki</title>
  <link rel="stylesheet" href="../scss/style-cast.css" />
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
        Obsada sędziowska
      </div>
    </div>
    <div class="cast--container">
      <div class="cast--container--month">
        <div class="cast--container--month--title" id="month-1" onclick="displayFlex('august')">
          Sierpień 2023r.
        </div>
        <div class="cast--container--month--boxWeeks" id="august">
          <div class="cast--container--month--boxWeeks--week" id="m1-w1" onclick="displayBlock('aug_05-06')">
            05-06.08.2023r.
          </div>
        </div>
        <div class="table--container" id="aug_05-06">
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Sobota 05.08.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  III liga gr. IV
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 27%;">Gospodarz</th>
                <th scope="col" style="width: 27%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Wiślanie Jaśkowice</td>
                <td>Wisłoka Dębica</td>
                <td>17:00</td>
                <td>A. Bińkowski</td>
                <td>J. Moskal</td>
                <td>E. Kiliszek</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9">
                  Niedziela 06.08.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  III liga gr. IV
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 27%;">Gospodarz</th>
                <th scope="col" style="width: 27%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KS Wiązownica</td>
                <td>Podlasie Biała Podlaska</td>
                <td>17:30</td>
                <td>A. Adamska</td>
                <td>K. Chrzanowska</td>
                <td>A. Nowak</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
  <?php include("../php/footer.php"); ?>
  <script src="../castEngine23autumn.js"></script>
</body>

</html>