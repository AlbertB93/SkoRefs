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
          <div class="cast--container--month--boxWeeks--week" id="m1-w2" onclick="displayBlock('aug_12')">
            12.08.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m1-w3" onclick="displayBlock('aug_15-16')">
            15-16.08.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m1-w4" onclick="displayBlock('aug_19-20')">
            19-20.08.2023r.
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
        <div class="table--container" id="aug_12">
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Sobota 12.08.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  CLU U-19
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
                <td>Wisła Kraków</td>
                <td>Polonia Warszawa</td>
                <td>12:00</td>
                <td>A. Adamska</td>
                <td>K. Purtak</td>
                <td>J. Moskal</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KS MORAVIA Anna-Bud Morawica</td>
                <td>AKS 1947 Busko-Zdrój</td>
                <td>17:00</td>
                <td>J. Chrzanowski</td>
                <td>E. Kiliszek</td>
                <td>D. Frydryk</td>
              </tr>
            <tbody>
              <tr>
                <td>ŁYSICA Bodzentyn</td>
                <td>OLIMPIA POGOŃ Staszów</td>
                <td>17:00</td>
                <td>A. Bińkowski</td>
                <td>M. Bujnowski</td>
                <td>R. Gębura</td>
              </tr>
            </tbody>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="aug_15-16">
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Wtorek 15.08.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
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
                <td>Arka Pawłów </td>
                <td>Stal Kunów</td>
                <td>17:00</td>
                <td>J. Moskal</td>
                <td>A. Bińkowski</td>
                <td>J. Chrzanowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Okręgowy Puchar Polski runda I
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tęcza Gowarczów</td>
                <td>Radiators Stąporków</td>
                <td>11:00</td>
                <td>A. Bińkowski</td>
                <td>J. Janus</td>
                <td>J. Moskal</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9">
                  Środa 16.08.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Korona II Kielce</td>
                <td>Łysica Bodzentyn</td>
                <td>17:00</td>
                <td class="awarded">J. Chrzanowski</td>
                <td>D. Wrona</td>
                <td>M. Rodak</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="aug_19-20">
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Sobota 19.08.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  III Liga gr. 4
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
                <td>Avia Świdnik </td>
                <td>Unia Tarnów</td>
                <td>15:00</td>
                <td class="awarded">A. Adamska</td>
                <td>G. Olejarczyk</td>
                <td>A. Nowak</td>
              </tr>
              <tr>
                <td>Karpaty Krosno</td>
                <td>Świdniczanka Świdnik</td>
                <td>17:00</td>
                <td>A. Bińkowski</td>
                <td>J. Chrzanowski</td>
                <td>E. Kiliszek</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9">
                  Niedziela 20.08.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Orlęta Kielce</td>
                <td>Korona II Kielce</td>
                <td>17:00</td>
                <td class="awarded">J. Moskal</td>
                <td>S. Dalach</td>
                <td>K. Czerwiński</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. I
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Skała Tumlin</td>
                <td>Lechia Strawczyn</td>
                <td>12:00</td>
                <td>E. Kiliszek</td>
                <td>A. Bińkowski</td>
                <td>J. Janus</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. 3
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nidzianka Bieliny</td>
                <td>Piast Osiek</td>
                <td>15:00</td>
                <td>B. Turski</td>
                <td>P. Kocia</td>
                <td>R. Sokołowski</td>
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