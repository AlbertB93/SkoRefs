<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skarżyskie Gwizdki</title>
  <link rel="stylesheet" href="../scss/style-castCopy.css" />
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
        Obsada sędziowska Copy
      </div>
    </div>
    <div class="cast--container">
      <div class="cast--container--month">
        <div class="cast--container--month--title" id="month-1" onclick="displayFlex('february')">
          Luty 2023r.
        </div>
        <div class="cast--container--month--boxWeeks" id="february">
          <div class="cast--container--month--boxWeeks--week" id="m1-w1" onclick="displayBlock('feb_25-26')">
            25-26.02.2023r.
          </div>
        </div>
        <div class="table--container" id="feb_25-26">
          <table>
            <div class="table--title">
              Niedziela 26.02.2023r.
            </div>
            <thead>
              <tr>
                <th colspan="9">
                  Ekstraliga Kobiet
                </th>
              </tr>
              <tr>
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
                <td>AP Orlen Gdańsk</td>
                <td>TME SMS Łódź</td>
                <td>26.02.2023r.</td>
                <td>13:00</td>
                <td>K. Bojar - Stefańska</td>
                <td>A. Nowak</td>
                <td class="awarded">K. Chrzanowska</td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="cast--container--month">
        <div class="cast--container--month--title" id="month-2" onclick="displayFlex('march')">
          Marzec 2023r.
        </div>
        <div class="cast--container--month--boxWeeks" id="march">
          <div class="cast--container--month--boxWeeks--week" id="m2-w1" onclick="displayBlock('mar_04-05')">
            04-05.03.2023r.
          </div>
        </div>
        <div class="table--container" id="mar_04-05">
          <table>
            <div class="table--title">
              Sobota 04.03.2023r.
            </div>
            <thead>
              <tr>
                <th colspan="9">
                  III Liga
                </th>
              </tr>
              <tr>
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
                <td>Pogoń Grodzisk Mazowiecki</td>
                <td>Legia II Warszawa</td>
                <td>04.03.2023r.</td>
                <td>14:00</td>
                <td>A. Adamska</td>
                <td>A. Nowak</td>
                <td>K. Chrzanowska</td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Niedziela 05.03.2023r.
            </div>
            <thead>
              <tr>
                <th colspan="9">
                  IV Liga
                </th>
              </tr>
              <tr>
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
                <td>Olimpia Pogoń Staszów</td>
                <td>Orlicz Suchedniów</td>
                <td>05.03.2023r.</td>
                <td>15:00</td>
                <td>A. Bińkowski</td>
                <td>D. Frydryk</td>
                <td>E. Kiliszek</td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>




    </div>
  </main>
  <?php include("../php/footer.php"); ?>
  <script src="../castEngineCopy.js"></script>
</body>

</html>