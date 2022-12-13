<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TS Skarżysko</title>
  <link rel="stylesheet" href="../scss/style-cast.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@600;700&family=Oswald&display=swap" rel="stylesheet" />

</head>

<body>
  <?php include("../php/header--pages.php"); ?>
  <?php include("../php/nav--pages.php"); ?>
  <main>
    <div class="container--title" onclick="displayNone()">
      OBSADA SĘDZIOWSKA
    </div>
    <div class="cast--container">
      <div class="cast--container--month" id="month-1" onclick="displayFlex('august')">Sierpień 2022r.</div>
      <div id="august">
        <div class="cast--container--month--week" id="week-1" onclick="displayBlock('august_06_07')">
          06-07.08.2022r.
        </div>
        <div class="cast--container--month--week" id="week-2" onclick="displayBlock('august_13_14')">
          13-14.08.2022r.
        </div>
        <div class="cast--container--month--week">17.08.2022r.</div>
        <div class="cast--container--month--week">20-21.08.2022r.</div>
        <div class="cast--container--month--week">27-28.08.2022r.</div>
      </div>
      <div class="test" id="august_06_07">
        <table>
          <div class="table--title">
            Obsada na dzień 06.08.2022r. (sobota)
          </div>
          <thead>
            <tr>
              <th scope="col">Liga</th>
              <th scope="col">Gospodarz</th>
              <th scope="col">Gość</th>
              <th scope="col">Data</th>
              <th scope="col">Godzina</th>
              <th scope="col">Sędzia główny</th>
              <th scope="col">Sędzia AS1</th>
              <th scope="col">Sędzia AS2</th>
              <th scope="col">Sędzia Techniczny</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2 liga</td>
              <td>MKS Znicz Pruszków</td>
              <td>Zagłębie II Lubin</td>
              <td>06.08.2022r</td>
              <td>17:00</td>
              <td>Gąsiorowski Konrad</td>
              <td>Kostrzewa Mikołaj</td>
              <td>Golonka Przemysław</td>
              <td>Adamska Anna</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="test" id="august_13_14">
        <table>
          <div class="table--title">
            Obsada na dzień 13.08.2022r. (sobota)
          </div>
          <thead>
            <tr>
              <th scope="col">Liga</th>
              <th scope="col">Gospodarz</th>
              <th scope="col">Gość</th>
              <th scope="col">Data</th>
              <th scope="col">Godzina</th>
              <th scope="col">Sędzia główny</th>
              <th scope="col">Sędzia AS1</th>
              <th scope="col">Sędzia AS2</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>4 Liga</td>
              <td>Alit Ożarów</td>
              <td>Moravia Morawica</td>
              <td>13.08.2022r.</td>
              <td>12:00</td>
              <td>Chrzanowski Jakub</td>
              <td>Adamska Anna</td>
              <td>Kocia Paweł</td>
            </tr>
          </tbody>
        </table>

        <table>
          <div class="table--title">
            Obsada na dzień 14.08.2022r. (sobota)
          </div>
          <thead>
            <tr>
              <th scope="col">Liga</th>
              <th scope="col">Gospodarz</th>
              <th scope="col">Gość</th>
              <th scope="col">Data</th>
              <th scope="col">Godzina</th>
              <th scope="col">Sędzia główny</th>
              <th scope="col">Sędzia AS1</th>
              <th scope="col">Sędzia AS2</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>3 liga</td>
              <td>Wisła Sandomierz</td>
              <td>Czarni Połaniec</td>
              <td>14.08.2022r</td>
              <td>17:00</td>
              <td>Adamska Anna</td>
              <td>Chrzanowska Katarzyna</td>
              <td>Nowak Angelika</td>
            </tr>
            <tr>
              <td>4 liga</td>
              <td>Orlicz Suchedniów</td>
              <td>Olimpia Pogoń Staszów</td>
              <td>14.08.2022r</td>
              <td>17:00</td>
              <td>Moskal Jakub</td>
              <td>Sokołowski Rafał</td>
              <td>Kocia Paweł</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="cast--container--month" id="month-2" onclick="displayFlex('september')">Wrzesień 2022r.</div>
      <div id="september">
        <div class="cast--container--month--week" onclick="displayBlock('august_06_07')">
          06-07.09.2022r.
        </div>
        <div class="cast--container--month--week" id="week-3" onclick="displayBlock('sept_13_14')">
          13-14.09.2022r.
        </div>
        <div class="cast--container--month--week">17.09.2022r.</div>
        <div class="cast--container--month--week">20-21.09.2022r.</div>
        <div class="cast--container--month--week">27-28.09.2022r.</div>
      </div>

      <div class="test" id="sept_13_14">
        <table>
          <div class="table--title">
            Obsada na dzień 13.08.2022r. (sobota)
          </div>
          <thead>
            <tr>
              <th scope="col">Liga</th>
              <th scope="col">Gospodarz</th>
              <th scope="col">Gość</th>
              <th scope="col">Data</th>
              <th scope="col">Godzina</th>
              <th scope="col">Sędzia główny</th>
              <th scope="col">Sędzia AS1</th>
              <th scope="col">Sędzia AS2</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>4 Liga</td>
              <td>Alit Ożarów</td>
              <td>Moravia Morawica</td>
              <td>13.08.2022r.</td>
              <td>12:00</td>
              <td>Chrzanowski Jakub</td>
              <td>Adamska Anna</td>
              <td>Kocia Paweł</td>
            </tr>
          </tbody>
        </table>

        <table>
          <div class="table--title">
            Obsada na dzień 14.08.2022r. (sobota)
          </div>
          <thead>
            <tr>
              <th scope="col">Liga</th>
              <th scope="col">Gospodarz</th>
              <th scope="col">Gość</th>
              <th scope="col">Data</th>
              <th scope="col">Godzina</th>
              <th scope="col">Sędzia główny</th>
              <th scope="col">Sędzia AS1</th>
              <th scope="col">Sędzia AS2</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>3 liga</td>
              <td>Wisła Sandomierz</td>
              <td>Czarni Połaniec</td>
              <td>14.08.2022r</td>
              <td>17:00</td>
              <td>Adamska Anna</td>
              <td>Chrzanowska Katarzyna</td>
              <td>Nowak Angelika</td>
            </tr>
            <tr>
              <td>4 liga</td>
              <td>Orlicz Suchedniów</td>
              <td>Olimpia Pogoń Staszów</td>
              <td>14.08.2022r</td>
              <td>17:00</td>
              <td>Moskal Jakub</td>
              <td>Sokołowski Rafał</td>
              <td>Kocia Paweł</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <?php include("../php/footer.php"); ?>
  <script src="../test.js"></script>
</body>

</html>