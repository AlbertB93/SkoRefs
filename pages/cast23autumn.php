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
        <div class="cast--container--month--title" id="month-2" onclick="displayFlex('september')">
          Wrzesień 2023r.
        </div>
        <div class="cast--container--month--title" id="month-3" onclick="displayFlex('october')">
          Październik 2023r.
        </div>
        <div class="cast--container--month--title" id="month-4" onclick="displayFlex('november')">
          Listopad 2023r.
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
          <div class="cast--container--month--boxWeeks--week" id="m1-w5" onclick="displayBlock('aug_23-27')">
            23-27.08.2023r.
          </div>
        </div>
        <div class="cast--container--month--boxWeeks" id="september">
          <div class="cast--container--month--boxWeeks--week" id="m2-w1" onclick="displayBlock('sep_02-03')">
            02-03.09.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m2-w2" onclick="displayBlock('sep_05-06')">
            05-06.09.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m2-w3" onclick="displayBlock('sep_08-10')">
            08-10.09.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m2-w4" onclick="displayBlock('sep_13')">
            13.09.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m2-w5" onclick="displayBlock('sep_15-17')">
            15-17.09.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m2-w6" onclick="displayBlock('sep_19-20')">
            19-20.09.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m2-w7" onclick="displayBlock('sep_23-24')">
            23-24.09.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m2-w8" onclick="displayBlock('sep_26-01')">
            26.09 - 01.10.2023r.
          </div>
        </div>
        <div class="cast--container--month--boxWeeks" id="october">
          <div class="cast--container--month--boxWeeks--week" id="m3-w1" onclick="displayBlock('oct_04-05')">
            04-05.10.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m3-w2" onclick="displayBlock('oct_06-08')">
            06-08.10.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m3-w3" onclick="displayBlock('oct_12-15')">
            12-14.10.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m3-w4" onclick="displayBlock('oct_18-22')">
            18-22.10.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m3-w5" onclick="displayBlock('oct_25-31')">
            25-31.10.2023r.
          </div>
        </div>
        <div class="cast--container--month--boxWeeks" id="november">
          <div class="cast--container--month--boxWeeks--week" id="m4-w1" onclick="displayBlock('nov_03-05')">
            03-05.11.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m4-w2" onclick="displayBlock('nov_10-12')">
            10-12.11.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m4-w3" onclick="displayBlock('nov_18-29')">
            18-29.11.2023r.
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
        <div class="table--container" id="aug_23-27">
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Środa 23.08.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Okręgowy Puchar Polski r. I
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
                <td>GLKS Fałków </td>
                <td>KS Smyków</td>
                <td>16:30</td>
                <td>A. Turski</td>
                <td>D. Frydryk</td>
                <td>R. Frączkiewicz</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Sobota 25.08.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  II Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 5%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
                <th scope="col" style="width: 16%;">Sędzia techniczny</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Wisła Puławy</td>
                <td>Hutnik Kraków</td>
                <td>17:00</td>
                <td>D. Gawęcki</td>
                <td>P. Szubielski</td>
                <td>M. Adamski</td>
                <td class="awarded">A. Bińkowski</td>
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
                <td>Korona II Kielce</td>
                <td>Moravia Morawica</td>
                <td>17:00</td>
                <td>J. Chrzanowski</td>
                <td>K. Chrzanowska</td>
                <td>K. Purtak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "O"
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Wicher Miedziana Góra</td>
                <td>Świt Ćmielów</td>
                <td>14:00</td>
                <td>P. Kocia</td>
                <td>J. Moskal</td>
                <td>M. Bator</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GLKS Fałków</td>
                <td>Tęcza Gowarczów</td>
                <td>15:00</td>
                <td>R. Sokołowski</td>
                <td>B. Turski</td>
                <td>R. Frączkiewicz</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Niedziela 27.08.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  III Liga
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
                <td>Olimpia Zambrów </td>
                <td>Mławianka Mława</td>
                <td>12:00</td>
                <td>A. Adamska</td>
                <td>A. Nowak</td>
                <td>K. Chrzanowska</td>
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
                <td>Stal Kunów </td>
                <td>Neptun Końskie</td>
                <td>17:00</td>
                <td>A. Bińkowski</td>
                <td>R. Sokołowski</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "O"
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Unia Sędziszów </td>
                <td>Nida Pińczów</td>
                <td>17:00</td>
                <td>E. Kiliszek</td>
                <td>R. Frączkiewicz</td>
                <td>J. Moskal</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Polonia Białogon Kielce</td>
                <td>Moravia II Morawica</td>
                <td>17:00</td>
                <td>K. Purtak</td>
                <td>P. Kocia</td>
                <td>J. Janus</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="sep_02-03">
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Sobota 02.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Ekstraliga Kobiet
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
                <td>Pogoń Tczew </td>
                <td>AZS UJ Kraków</td>
                <td>12:00</td>
                <td>A. Adamska</td>
                <td>K. Chrzanowska</td>
                <td>A. Nowak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  III Liga gr.1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Świt Nowy Dwór Mazowiecki</td>
                <td>Olimpia Zambrów</td>
                <td>17:00</td>
                <td>A. Bińkowski</td>
                <td>J. Moskal</td>
                <td>J. Chrzanowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "O"
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS ORLICZ Suchedniów</td>
                <td>ŁKS GÓRNIK Łagów</td>
                <td>11:00</td>
                <td>P. Kocia</td>
                <td>R. Frączkiewicz</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Jun. Mł. Gr. 1
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>GRANAT Skarżysko-Kamienna </td>
                <td>LECHIA Strawczyn</td>
                <td>15:00</td>
                <td>R. Frączkiewicz</td>
                <td>J.Janus</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Tr. Mł . Gr. 1
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>MKS NEPTUN Końskie</td>
                <td>KS HETMAN II Włoszczowa</td>
                <td>10:00</td>
                <td>J.Janus</td>
                <td>-</td>
                <td>-</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Mł. Mł. Gr. 2
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>MKS ORLICZ Suchedniów</td>
                <td>GKS GRÓD Ćmińsk</td>
                <td>14:30</td>
                <td>P.Kocia</td>
                <td>-</td>
                <td>-</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9">
                  Niedziela 03.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>SKAŁA Tumlin</td>
                <td>ZENIT Chmielnik</td>
                <td>12:00</td>
                <td>K. Purtak</td>
                <td>D. Frydryk</td>
                <td>A. Bińkowski</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>GKS 4 ECO ASTRA Piekoszów</td>
                <td>SOKÓŁ-NORDKALK GÓRNIK Rykoszyn</td>
                <td>15:00</td>
                <td>K. Chrzanowski</td>
                <td>B. Turski</td>
                <td>M. Bator</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>RADIATOR$ Stąporków</td>
                <td>VICTORIA Mniów</td>
                <td>15:00</td>
                <td>R. Frączkiewicz</td>
                <td>K. Chrzanowska</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "B" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>TĘCZA Gowarczów</td>
                <td>KS SAMSON Samsonów</td>
                <td>11:00</td>
                <td>R. Sokołowski</td>
                <td>R. Frączkiewicz</td>
                <td>K. Chrzanowska</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Św. Jun. St.
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>KKP KORONA Kielce</td>
                <td>SPARTAKUS Daleszyce</td>
                <td>15:30</td>
                <td>J. Moskal</td>
                <td>K. Purtak</td>
                <td>J. Janus</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Św. Tr. St.
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>MKS NEPTUN Końskie</td>
                <td>MKS STAR Starachowice</td>
                <td>10:00</td>
                <td>B. Turski</td>
                <td>J. Janus</td>
                <td>K. Drzazga</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Św. Mł. St.
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>UKS AP CHAMPIONS Końskie</td>
                <td>MKS STAR I Starachowice</td>
                <td>10:00</td>
                <td>M. Bator</td>
                <td>-</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="sep_05-06">
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Wtorek 05.09.2023r.
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
              <tr>
                <th class="awarded--small" colspan="9">
                  Trampkarz Starszy gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Orlicz Suchedniów</td>
                <td>Orlęta Kielce</td>
                <td>17:00</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Trampkarz Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>UKS Celsium Skarżysko</td>
                <td>KP Kszo 1929 II Ostrowiec Św.</td>
                <td>17:00</td>
                <td>J. Janus</td>
                <td>D. Frydryk</td>
                <td>A. Bińkowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9">
                  Środa 06.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Okręgowy Puchar Polski
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tęcza Gowarczów</td>
                <td>Partyzant Radoszyce</td>
                <td>16:45</td>
                <td>D. Frydryk</td>
                <td>K. Purtak</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Młodzik Młodszy gr. 5
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>PAS II Skarżysko</td>
                <td>Granat Borki</td>
                <td>17:30</td>
                <td>R. Frączkiewicz</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="sep_08-10">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Piątek 08.09.2023r.
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
              <tr>
                <th class="awarded--small" colspan="9">
                  Młodzik Młodszy gr. 5
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PAS II Skarżysko</td>
                <td>UKS AP CHAMPIONS Stąporków</td>
                <td>17:00</td>
                <td>K. Chrzanowska</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Sobota 06.09.2023r.
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
                <td>Alit Ożarów</td>
                <td>Pogoń Staszów</td>
                <td>16:00</td>
                <td>J. Chrzanowski</td>
                <td>R. Frączkiewicz</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <tr>
              <th class="awarded" colspan="9">
                Klasa Okręgowa
              </th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>ŁKS Górnik Łagów</td>
                <td>Kamienna Brody</td>
                <td>16:00</td>
                <td>K. Chrzanowska</td>
                <td>D. Frydryk</td>
                <td>K. Purtak</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    CLJ U-15
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>KKP Korona Kielce</td>
                <td>Garbarnia Kraków</td>
                <td>12:00</td>
                <td>K. Purtak</td>
                <td>K. Chrzanowska</td>
                <td>D. Frydryk</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Świętokrzyska Trampkarz Starszy
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>KP KSZO 1929 Ostrowiec Św.</td>
                <td>09:30</td>
                <td>P. Kocia</td>
                <td>B. Turski</td>
                <td>K. Drzazga</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Trampkarz Młodszy gr. 1
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>Partyzant Radoszyce</td>
                <td>Zryw 2021 Łopuszno</td>
                <td>12:00</td>
                <td>B. Turski</td>
                <td>P. Kocia</td>
                <td>K. Drzazga</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Świętokrzyska Młodzik Starszy gr. 1
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>PAS Skarżysko - Kamienna</td>
                <td>KS DAP Kielce</td>
                <td>13:30</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Świętokrzyska Młodzik Starszy
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>UKS AP CHAMPIONS Końskie</td>
                <td>KP KSZO 1929 Ostrowiec Św.</td>
                <td>09:30</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Młodzik Starszy gr. 2
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>Tęcza Gowarczów</td>
                <td>Astra Piekoszów</td>
                <td>11:00</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Niedziela 10.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Ekstraliga Kobiet
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Medyk Konin</td>
                <td>Śląsk Wrocław</td>
                <td>17:00</td>
                <td>A. Adamska</td>
                <td>K. Chrzanowska</td>
                <td>A. Nowak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>SOKÓŁ-NORDKALK GÓRNIK Rykoszyn</td>
                <td>KS MORAVIA II Anna-Bud Morawica</td>
                <td>15:00</td>
                <td>B. Turski</td>
                <td>J. Moskal</td>
                <td>P. Kocia</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "B" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KS KAMIENNA WOLA</td>
                <td>TOPSPIN Promnik</td>
                <td>11:00</td>
                <td>D. Frydryk</td>
                <td>R. Sokołowski</td>
                <td>J. Chrzanowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Junor Młodszy gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GRANAT Skarżysko-Kamienna </td>
                <td>KS DAP Kielce</td>
                <td>11:00</td>
                <td>A. Bińkowski</td>
                <td>P. Kocia</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Trampkarz Młodszy gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>NAPRZÓD Jędrzejów</td>
                <td>10:00</td>
                <td>K. Purtak</td>
                <td>R. Frączkiewicz</td>
                <td>K. Drzazga</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="sep_13">
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Środa 13.09.2023r.
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
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>SKS Wisła Sandomierz</td>
                <td>16:00</td>
                <td>A. Bińkowski</td>
                <td>E. Kiliszek</td>
                <td>K. Purtak </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Okręgowy Puchar Polskie
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Granat Borki</td>
                <td>Orlicz Suchedniów</td>
                <td>18:00</td>
                <td>J. Moskal</td>
                <td>D. Frydryk</td>
                <td>K. Chrzanowska</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Młodzik Młodszy gr. 2
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KS Sokół Skarżysko</td>
                <td>SPARTAKUS Daleszyce</td>
                <td>17:00</td>
                <td>P. Kocia</td>
                <td>-</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="sep_15-17">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Piątek 15.09.2023r.
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
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Junior Starszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS NEPTUN Końskie</td>
                <td>ORLĘTA Kielce</td>
                <td>19:00</td>
                <td>D. Frydryk</td>
                <td>R. Sokołowski</td>
                <td>A. Bińkowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Sobota 16.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  III Liga
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Karpaty Krosno</td>
                <td>Wiślanie Jaśkowice</td>
                <td>17:00</td>
                <td>A. Adamska</td>
                <td>R. Chrzanowska</td>
                <td>A. Nowak</td>
              </tr>
            </tbody>
            <tr>
              <th class="awarded" colspan="9">
                IV Liga
              </th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pogoń Staszów</td>
                <td>AKS 1947 Busko - Zdrój</td>
                <td>16:00</td>
                <td>J. Moskal</td>
                <td>R. Sokołowski</td>
                <td>K. Purtak</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Świętokrzyska Junior Starszy
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>Korona SA II Kielce</td>
                <td>Spartakus Daleszyce</td>
                <td>15:00</td>
                <td>P. Kocia</td>
                <td>R. Frączkiewicz</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Trampkarz Starszy gr. 1
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>Orlicz Suchedniów</td>
                <td>GKS Zio-Max II Nowiny</td>
                <td>11:00</td>
                <td>R. Frączkiewicz</td>
                <td>P. Kocia</td>
                <td>K. Drzazga</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Świętokrzyska Młodzik Młodszy
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>PAS Skarżysko - Kamienna</td>
                <td>Orlęta II Kielce</td>
                <td>09:00</td>
                <td>K. Purtak</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Młodzik Młodszy gr. 2
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>KS SOKÓŁ Skarżysko-Kamienna</td>
                <td>FKS ŁAZY Starachowice</td>
                <td>11:00</td>
                <td>K. Purtak</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Młodzik Młodszy gr. 5
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>UKS AP CHAMPIONS Stąporków</td>
                <td>Granat Borki</td>
                <td>09:30</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Niedziela 17.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  CLU U-19
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Górnik Zabrze</td>
                <td>Widzew Łódź</td>
                <td>14:00</td>
                <td>A. Bińkowski</td>
                <td>J. Moskal</td>
                <td>P. Kocia</td>
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
                <td>HETMAN Włoszczowa</td>
                <td>GKS Rudki</td>
                <td>16:30</td>
                <td>A. Adamska</td>
                <td>R. Frączkiewicz</td>
                <td>D. Frydryk</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS ZRYW 2021 Łopuszno</td>
                <td>AZS POLITECHNIKA ŚWIĘTOKRZYSKA Kielce</td>
                <td>15:00</td>
                <td>B. Turski</td>
                <td>K. Chrzanowska</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "B" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>TOPSPIN Promnik</td>
                <td>GRANAT Borki</td>
                <td>11:00</td>
                <td>M. Bator</td>
                <td>R. Sokołowski</td>
                <td>K. Chrzanowska</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Junior Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PKS Arka Kluczewsko</td>
                <td>NAPRZÓD II Jędrzejów</td>
                <td>11:00</td>
                <td>R. Frączkiewicz</td>
                <td>A. Adamska</td>
                <td>D. Frydryk</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Młodzik Młodszy gr. 2
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS ORLICZ Suchedniów</td>
                <td>Wicher Miedziana Góra</td>
                <td>11:00</td>
                <td>B. Turski</td>
                <td>K. Drzazga</td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="sep_19-20">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Wtorek 19.09.2023r.
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
              <tr>
                <th class="awarded--small" colspan="9">
                  Młodzik młodszy gr.5
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Neptun Końskie</td>
                <td>AP CHAMPIONS Końskie</td>
                <td>16:00</td>
                <td>B. Turski</td>
                <td>R. Sokołowski</td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Środa 20.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Okręgowy Puchar Polski
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GLKS Fałków</td>
                <td>Partyzant Radoszyce</td>
                <td>16:15</td>
                <td>D. Frydryk</td>
                <td>K. Purtak</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Młodzik Starszy gr. 2
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>Tęcza Gowarczów</td>
                <td>Sokół Rykoszyn/td>
                <td>17:00</td>
                <td>E. Kiliszek</td>
                <td>B. Turski</td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="sep_23-24">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Sobota 23.09.2023r.
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
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Wierna Małogoszcz</td>
                <td>Arka Pawłów</td>
                <td>16:00</td>
                <td>J. Chrzanowski</td>
                <td>R. Frączkiewicz</td>
                <td>P. Kocia</td>
              </tr>
              <tr>
                <td>GKS Rudki</td>
                <td>SKS Wisła Sandomierz</td>
                <td>16:00</td>
                <td>J. Moskal</td>
                <td>K. Purtak</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
            <tr>
              <th class="awarded" colspan="9">
                Klasa "O"
              </th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>Partyzant Radoszyce</td>
                <td>Partyzant Wodzisław</td>
                <td>16:00</td>
                <td>E. Kiliszek</td>
                <td>R. Sokołowski</td>
                <td>J. Janus</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Świętokrzyska Trampkarz Starszy
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>Neptun Końskie</td>
                <td>KKP Korona II Kielce</td>
                <td>09:30</td>
                <td>P. Kocia</td>
                <td>R. Frączkiewicz</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Świętokrzyska Młodzik Starszy
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>AP CHAMPIONS Końskie</td>
                <td>KKP Korona II Kielce</td>
                <td>10:00</td>
                <td>K. Purtak</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Świętokrzyska Młodzik Staszy gr. 1
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>PAS Skarżysko-Kamienna</td>
                <td>Moravia Morawica</td>
                <td>10:00</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Młodzik Starszy gr. 2
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>Radiators Stąporków</td>
                <td>Góral Górno</td>
                <td>12:30</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Młodzik Młodszy gr. 5
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>UKS AP CHAMPIONS Stąporków</td>
                <td>KS Smyków</td>
                <td>09:30</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <thead>
                <tr>
                  <th class="awarded--small" colspan="9">
                    Młodzik Młodszy gr. 2
                  </th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>KS SOKÓŁ Skarżysko-Kamienna</td>
                <td>MKS Orlicz Suchedniów</td>
                <td>12:00</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Niedziela 17.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Lechia Strawczyn</td>
                <td>Victoria Mniów</td>
                <td>15:00</td>
                <td>B. Turski</td>
                <td>R. Sokołowski</td>
                <td>M. Bator</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "B" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GRANAT Borki</td>
                <td>Tęcza Gowarczów</td>
                <td>11:00</td>
                <td>K. Purtak</td>
                <td>R. Frączkiewicz</td>
                <td>J. Moskal</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Junior Starszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KKP Korona Kielce</td>
                <td>Neptun Końskie</td>
                <td>14:30</td>
                <td>R. Frączkiewicz</td>
                <td>J. Moskal</td>
                <td>K. Purtak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Trampkarz Młodszy gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Neptun Końskie</td>
                <td>Bucovia Bukowa</td>
                <td>10:00</td>
                <td>M. Bator</td>
                <td>R. Sokołowski</td>
                <td>B. Turski </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Młodzik Młodszy gr. 5
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PAS II Skarżysko</td>
                <td>Neptun Końskie</td>
                <td>10:00</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="sep_26-01">
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Wtorek 26.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded--small" colspan="9">
                  Junor Młodszy gr. 1
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
                <td>Granat Skarżysko - Kamienna</td>
                <td>Star II Starachowice</td>
                <td>16:45</td>
                <td>D. Frydryk</td>
                <td>J. Janus</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Trampkarz Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Celsium Skarżysko - Kamienna </td>
                <td>ALit Ożarów</td>
                <td>16:30</td>
                <td>R. Sokołowski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Środa 27.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Puchar Polski 1/32 finału
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 5%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
                <th scope="col" style="width: 16%;">Sędzia techniczny</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Legia II Warszawa</td>
                <td>Ruch CHorzów</td>
                <td>15:00</td>
                <td>G. Kowałko</td>
                <td>K. Nejman</td>
                <td>M. Sobczak</td>
                <td class="awarded">A. Adamska</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Finał Okręgowego Pucharu Polski Kobiet
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KSP Kielce</td>
                <td>KSZO 1929 Ostrowiec Św.</td>
                <td>16:00</td>
                <td>K. Chrzanowska</td>
                <td>K. Purtak</td>
                <td>R. Rękawik</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Piątek 29.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Junior Starszy
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
                <td>Neptun Końskie</td>
                <td>GKS Zio-Max Nowiny</td>
                <td>19:15</td>
                <td>R. Sokołowski</td>
                <td>D. Frydryk</td>
                <td>K. Chrzanowska</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Sobota 30.09.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "O"
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
                <td>Orlicz Suchedniów</td>
                <td>Unia Sędziszów</td>
                <td>12:00</td>
                <td>E. Kiliszek</td>
                <td>J. Moskal</td>
                <td>K. Purtak</td>
              </tr>
              <tr>
                <td>ŁKS Łagów</td>
                <td>Partyzant Radoszyce</td>
                <td>15:00</td>
                <td>E. Chrzanowska</td>
                <td>D. Frydryk</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "B" gr.1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Czarnovia Kielce</td>
                <td>Kamienna Wola</td>
                <td>16:00</td>
                <td>J. Moskal</td>
                <td>B. Turski</td>
                <td>J. Janus</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Tramkparz Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Celsium Skarżysko</td>
                <td>Łyscia Bodzentyn</td>
                <td>16:00</td>
                <td>D. Frydryk</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Tramkparz Młodszy I
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Partyzant Radoszyce</td>
                <td>Neptun Końskie</td>
                <td>10:00</td>
                <td>B. Turski </td>
                <td>J. Janus</td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Młodzik Starszy gr. 5
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PAS II Skarżysko</td>
                <td>Łazy Starachowice</td>
                <td>11:00</td>
                <td>K. Chrzanowska</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Młodzik Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PAS I Skarżysko</td>
                <td>Orlęta III Kielce</td>
                <td>09:00</td>
                <td>R. Sokołowski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Młodzik Młodszy gr. 5
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Neptun Końskie </td>
                <td>AP CHAMPIONS Stąporków</td>
                <td>12:30</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>AP CHAMPIONS Końskie</td>
                <td>PAS II Skarżysko</td>
                <td>16:00</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9">
                  Niedziela 01.10.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Ekstraliga Kobiet
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
                <td>REKORD Bielsko Biała</td>
                <td>Śląsk Wrocław</td>
                <td>12:00</td>
                <td>A. Adamska</td>
                <td>K. Chrzanowska</td>
                <td>A. Nowak</td>
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
                <td>Łyscia Bodzentyn</td>
                <td>Orlęta Kielce</td>
                <td>15:00</td>
                <td>J. Chrzanowski</td>
                <td>E. Kiliszek</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Skała Tumlin</td>
                <td>POLITECHNIKA Świętokrzyska</td>
                <td>15:00</td>
                <td>F. Szczurek</td>
                <td class="awarded">B. Turski</td>
                <td class="awarded">J. Janus</td>
              </tr>
              <tr>
                <td>Radators Stąporków</td>
                <td>Zenit Chmielnik</td>
                <td>15:00</td>
                <td>K. Purtak</td>
                <td>J. Moskal</td>
                <td>D. Frydryk</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "B" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ULKS Łączna</td>
                <td>Polania Pierzchnica</td>
                <td>11:00</td>
                <td class="awarded">B. Turski</td>
                <td class="awarded">J. Janus</td>
                <td>F. Szczurek</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Trampkarz Starszy gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Orlicz Suchedniów</td>
                <td>Moravia Morawica</td>
                <td>11:00</td>
                <td>D. Frydryk</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="oct_04-05">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Środa 04.10.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Okręgowy Puchar Polski
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
                <td>GKS Rudki</td>
                <td>Korona SA III Kielce</td>
                <td>15:30</td>
                <td>E. Kiliszek</td>
                <td>D. Frydryk</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Naprzód Jędrzejów</td>
                <td>Wierna Małogoszcz</td>
                <td>15:30</td>
                <td>J. Moskal</td>
                <td>K. Chrzanowska</td>
                <td>R. Frączkiewicz</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Czwartek 05.10.2023r.
                </th>
              </tr>
              <thead>
                <thead>
                  <tr>
                    <th class="awarded--small" colspan="9">
                      Świętokrzyska Młodzik Starszy
                    </th>
                  </tr>
                </thead>
              <tbody>
                <tr>
                  <td>UKS AP CHAMPIONS Końskie</td>
                  <td>MKS Czarni Połaniec</td>
                  <td>16:00</td>
                  <td>J. Janus</td>
                  <td>R. Frączkiewicz</td>
                  <td> - </td>
                </tr>
              </tbody>
              <thead>
                <thead>
                  <tr>
                    <th class="awarded--small" colspan="9">
                      Młodzik Młodszy gr. 5
                    </th>
                  </tr>
                </thead>
              <tbody>
                <tr>
                  <td>UKS AP CHAMPIONS Stąporków</td>
                  <td>UKS AP CHAMPIONS Końskie</td>
                  <td>16:30</td>
                  <td>J. Chrzanowska</td>
                  <td> - </td>
                  <td> - </td>
                </tr>
              </tbody>
          </table>
        </div>
        <div class="table--container" id="oct_06-08">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Piątek 06.10.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  III Liga
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
                <td>Broń Radom</td>
                <td>Unia Skierniewice</td>
                <td>19:00</td>
                <td>A. Adamska</td>
                <td>K. Chrzanowska</td>
                <td>A. Nowak</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Sobota 07.10.2023r.
                </th>
              </tr>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "O"
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
                <td>Partyzant Radoszyce</td>
                <td>KS Victoria 2015 Skalmbierz</td>
                <td>15:00</td>
                <td>P. Kocia</td>
                <td>R. Frączkiewicz</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Junior Starszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Spartakus Daleszyce</td>
                <td>KKP Korona Kielce</td>
                <td>09:30</td>
                <td>J. Moskal</td>
                <td>A. Adamska</td>
                <td>J. Janus</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Młodzik Starszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PAS Skarżysko - Kamienna</td>
                <td>Orlęta I Kielce</td>
                <td>09:30</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Młodzik Starszy gr. 5
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PAS II Skarżysko - Kamienna</td>
                <td>Spartakus Daleszyce</td>
                <td>09:30</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Młodzik Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PAS I Skarżysko - Kamienna</td>
                <td>KS Baszta Rytwiany</td>
                <td>09:30</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Niedziela 08.10.2023r.
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
                <td>Spartakus Daleszyce</td>
                <td>Klimontowianka Klimontów</td>
                <td>15:00</td>
                <td>J. Chrzanowski</td>
                <td>D. Frydryk</td>
                <td>P. Kocia</td>
              </tr>
              <tr>
                <td>MKS Olimpia Pogoń Staszów</td>
                <td>Korona SA II Kielce</td>
                <td>15:00</td>
                <td>A. Adamska</td>
                <td>K. Chrzanowska</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Skała Tumlin </td>
                <td>Astra Piekoszów</td>
                <td>12:00</td>
                <td>R. Frączkiewicz</td>
                <td>E. Kiliszek</td>
                <td>K. Purtak</td>
              </tr>
              <tr>
                <td>MSS Masłów</td>
                <td>Radiators Stąporów</td>
                <td>11:00</td>
                <td>D. Frydryk</td>
                <td>P. Kocia</td>
                <td>J. Chrzanowski</td>
              </tr>
            </tbody>

            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Junior Starszy gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GKS Rudki</td>
                <td>Granat Borki</td>
                <td>2:30</td>
                <td>R. Sokołowski</td>
                <td>J. Janus </td>
                <td>T. Witkowski </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="oct_12-15">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Czwartek 12.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mł. Mł. gr. 5</td>
                <td>UKS AP CHAMPIONS Stąporków</td>
                <td>UKS AP CHAMPIONS Końskie</td>
                <td>16:00</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>

          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Sobota 14.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ekstraliga Kobiet </td>
                <td>Medyk Konin</td>
                <td>GÓRNIK Łęczna</td>
                <td>15:00</td>
                <td>A. Adamska</td>
                <td>K. Chrzanowska</td>
                <td>A. Nowak</td>
              <tr>
              <tr>
                <td>Klasa "A" gr.1 </td>
                <td>Moravia II Morawica</td>
                <td>Skała Tumlin</td>
                <td>15:00</td>
                <td>B. Turski</td>
                <td>J. Moskal</td>
                <td>J. Chrzanowski</td>
              <tr>
                <td>Św. Jun. St.</td>
                <td>Neptun Końskie</td>
                <td>Spartakus Daleszyce</td>
                <td>10:00</td>
                <td>K. Purtak</td>
                <td>R. Frączkiewicz</td>
                <td>D. Frydryk</td>
              </tr>
              <tr>
                <td>Tr. St. gr. 1</td>
                <td>Orlicz Suchedniów</td>
                <td>DAP I Kielce</td>
                <td>10:00</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Św. Tr. Mł.</td>
                <td>UKS Celsium Skarżysko</td>
                <td>Piaskowianka Piaski</td>
                <td>10:00</td>
                <td>P. Kocia</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Św. Mł. Mł.</td>
                <td>PAS I Skarżysko</td>
                <td>GALACTICOS II Ostrowiec Św.</td>
                <td>09:00</td>
                <td>J. Chrzanowski</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Mł. Mł. gr. 2</td>
                <td>KS Sokół Skarżysko</td>
                <td>Wicher Miedziana Góra</td>
                <td>10:00</td>
                <td>J. Chrzanowski</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Mł. Mł. gr. 5</td>
                <td>NEPTUN Końskie</td>
                <td>Granat Borki</td>
                <td>12:00</td>
                <td>R. Frączkiewicz</td>
                <td>D. Frydryk</td>
                <td>K. Purtak</td>
              </tr>
              <tr>
                <td>Mł. Mł. gr. 5</td>
                <td>UKS CHAMPIONS Stąporków</td>
                <td>PAS II Skarżysko</td>
                <td>12:00</td>
                <td>P. Kocia</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>


          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Niedziela 15.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>IV Liga</td>
                <td>Neptun Końskie</td>
                <td>GKS Rudki</td>
                <td>15:00</td>
                <td>J. Moskal</td>
                <td>P. Kocia</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Klasa "O"</td>
                <td>Piaskowianka Piaski</td>
                <td>TS 1946 NIDA Pińczów</td>
                <td>15:00</td>
                <td>E. Kiliszek</td>
                <td>J. Chrzanowski</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Klasa "O"</td>
                <td>Orlicz Suchedniów</td>
                <td>Sparta Kazimierza Wielska</td>
                <td>15:00</td>
                <td>K. Chrzanowska</td>
                <td>A. Adamska</td>
                <td>D. Frydryk</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Mł. Mł. gr. 2</td>
                <td>Orlicz Suchedniów</td>
                <td>Spartakus Daleszyce</td>
                <td>10:00</td>
                <td>B. Sykulski</td>
                <td>K. Drzazga</td>
                <td> - </td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Mł. Mł. gr. 5</td>
                <td>KS Smyków</td>
                <td>UKS CHAMPIONS Końskie</td>
                <td>10:00</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="table--container" id="oct_18-22">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Środa 18.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mł. Mł. gr. 5</td>
                <td>PAS II Skarżysko</td>
                <td>KS Smyków</td>
                <td>16:00</td>
                <td>R. Frączkiewicz</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Piatek 20.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>III Liga</td>
                <td>Chełmianka Chełm</td>
                <td>Sokół Sieniawa</td>
                <td>14:30</td>
                <td>A. Bińkowski</td>
                <td>J. Moskal</td>
                <td>E. Kiliszek</td>
              </tr>
              <tr>
                <td>Tr. Mł. gr. 1</td>
                <td>MKS Neptun Końskie</td>
                <td>Zryw Łopuszno</td>
                <td>19:30</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Sobota 21.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Klasa "B" gr. 1</td>
                <td>Kamienna Wola</td>
                <td>Samson Samsonów</td>
                <td>15:00</td>
                <td>P. Kocia</td>
                <td>R. Sokołowski</td>
                <td>K. Purtak</td>
              <tr>
              <tr>
                <td>Tr. Mł. gr. 1</td>
                <td>Partyzant Radoszyce</td>
                <td>Bucovia Bukowa</td>
                <td>09:30</td>
                <td>J. Janus</td>
                <td>R. Sokołowski </td>
                <td>B. Turski</td>
              </tr>
              <tr>
                <td>Św. Mł. St.</td>
                <td>UKS AP CHAMPIONS Końskie</td>
                <td>Korona I Kielce</td>
                <td>10:00</td>
                <td>D. Frydryk</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Mł. St. gr. 5</td>
                <td>PAS II Skarżysko</td>
                <td>Star II Starachowice</td>
                <td>12:00</td>
                <td>R. Frączkiewicz</td>
                <td> - </td>
                <td> - </td>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Niedziela 22.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>III Liga</td>
                <td>Pelikan Łowicz</td>
                <td>Victoria Sulejówek</td>
                <td>12:00</td>
                <td>A.Adamska</td>
                <td>K. Chrzanowska</td>
                <td>A. Nowak</td>
              </tr>
              <tr>
                <td>Klasa "O"</td>
                <td>Świt Ćmielów</td>
                <td>Gród Ćmińsk</td>
                <td>14:00</td>
                <td>B. Turski</td>
                <td>E. Kiliszek</td>
                <td>J. Chrzanowski</td>
              </tr>
              <tr>
                <td>Klasa "A" gr. 1</td>
                <td>Astra Piekoszów</td>
                <td>Moravia II Morawica</td>
                <td>14:00</td>
                <td>D. Frydryk</td>
                <td>J. Moskal</td>
                <td>R. Sokołowski</td>
              </tr>
              <tr>
                <td>Klasa "B" gr. 1</td>
                <td>Płomień Wólka Kłucka</td>
                <td>ULKS Łączna</td>
                <td>11:00</td>
                <td>K. Purtak</td>
                <td>R. Frączkiewicz</td>
                <td>J. Janus</td>
              </tr>
              <tr>
                <td>Klasa "B" gr. 1</td>
                <td>TOP SPIN Promnik</td>
                <td>Czarnovia Kielce</td>
                <td>11:00</td>
                <td>R. Sokołowski</td>
                <td>D. Frydryk</td>
                <td>J. Moskal</td>
              </tr>
              <tr>
                <td>Mł. St. gr. 2</td>
                <td>Radiators Stąporków</td>
                <td>Astra Piekoszów</td>
                <td>15:30</td>
                <td>K. Drzazga</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="oct_25-31">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Środa 25.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mł. St. gr. 2</td>
                <td>Tęcza Gowarczów</td>
                <td>Radiators Stąporków</td>
                <td>16:00</td>
                <td>J. Janus</td>
                <td>K. Chrzanowska</td>
                <td>K. Purtak</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Sobota 28.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tr. St. gr. 1</td>
                <td>Orlicz Suchedniów</td>
                <td>Spartakus Daleszyce</td>
                <td>14:00</td>
                <td>E. Kiliszek</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Tr. Mł. gr. 1</td>
                <td>Partyzant Radoszyce</td>
                <td>KS Hetman II Włoszczowa</td>
                <td>09:30</td>
                <td>J. Chrzanowski</td>
                <td>J. Moskal </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Mł. St. gr. 5</td>
                <td>PAS II Skarżysko</td>
                <td>UKS Baćkowice</td>
                <td>10:30</td>
                <td>K. Purtak</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Św. Mł. Mł.</td>
                <td>PAS Skarżysko</td>
                <td>KS DAP II Kielce</td>
                <td>09:00</td>
                <td>A. Bińkowski</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Mł. Mł. Gr. 2</td>
                <td>Orlicz Suchedniów</td>
                <td>Sokół Skarżysko </td>
                <td>09:00</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Mł. Mł. Gr. 5</td>
                <td>UKS AP CHAMPIONS Końskie</td>
                <td>GRANAT Borki</td>
                <td>15:00</td>
                <td>J. Janus</td>
                <td>R. Frączkiewicz</td>
                <td>K. Chrzanowska</td>
              </tr>
              <tr>
                <td>Św. Mł. Mł.</td>
                <td>Neptun Końskie</td>
                <td>PAS II Skarżysko</td>
                <td>09:00</td>
                <td>K. Chrzanowska</td>
                <td>J. Janus</td>
                <td>R. Frączkiewicz</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Niedziela 29.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>IV Liga</td>
                <td>Arka Pawłów</td>
                <td>Pogoń Staszów</td>
                <td>13:30</td>
                <td>A. Bińkowski</td>
                <td>D. Frydryk</td>
                <td>B. Turski</td>
              </tr>
              <tr>
                <td>IV Liga</td>
                <td>Łysica Bodzentyn</td>
                <td>GKS Rudki</td>
                <td>13:00</td>
                <td>A. Adamska</td>
                <td>K. Chrzanowska</td>
                <td>K. Purtak</td>
              </tr>
              <tr>
                <td> Klasa "O"</td>
                <td>ORLICZ Suchedniów</td>
                <td>GKS Górno</td>
                <td>13:30</td>
                <td>E. Kiliszek</td>
                <td>R. Frączkiewicz</td>
                <td>R. Sokołowski</td>
              </tr>
              <tr>
                <td>Klasa "A" gr. 1</td>
                <td>Radiators Stąporków</td>
                <td>Skała Tumlin</td>
                <td>13:00</td>
                <td>J. Moskal</td>
                <td>J. Chrzanowski</td>
                <td>J. Janus</td>
              </tr>
              <tr>
                <td>Klasa "B" gr. 1</td>
                <td>ULKS Łączna</td>
                <td>Czarnovia Kielce</td>
                <td>11:00</td>
                <td>R. Sokołowski</td>
                <td>E. Kiliszek</td>
                <td>R. Frączkiewicz</td>
              </tr>
              <tr>
                <td>Św. Jun. St.</td>
                <td>Neptun Końskie</td>
                <td>KKP Korona Kielce</td>
                <td>10:00</td>
                <td>J. Chrzanowski</td>
                <td>J. Janus</td>
                <td>J. Moskal</td>
              </tr>
              <tr>
                <td>Św. Tr. Mł.</td>
                <td>Celsium Skarżysko</td>
                <td>AKS Busko Zdrój</td>
                <td>11:00</td>
                <td>K. Drzazga</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Wtorek 31.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Św. Tr. Mł.</td>
                <td>Łysica Bodzentyn</td>
                <td>Celsium Skarżysko</td>
                <td>14:30</td>
                <td>J. Janus</td>
                <td>K. Chrzanowska</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="nov_03-05">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Piątek 03.11.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>III Liga</td>
                <td>KS Wiązownica</td>
                <td>Chełmianka Chełm</td>
                <td>17:00</td>
                <td>A. Adamska</td>
                <td>K. Chrzanowska</td>
                <td>A. Nowak</td>
              </tr>
              <tr>
                <td>Tr. Mł. gr. 1</td>
                <td>MKS Neptun Końskie</td>
                <td>Partyzant Radoszyce</td>
                <td>19:15</td>
                <td>B. Turski</td>
                <td>K. Purtak</td>
                <td>R. Frączkiewicz</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Sobota 04.11.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>III Liga</td>
                <td>Orlęta Radzyń Podlaski</td>
                <td>Wiślanie Jaśkowice</td>
                <td>13:00</td>
                <td>A. Bińkowski</td>
                <td>J. Moskal</td>
                <td>E. Kiliszek</td>
              <tr>
              <tr>
                <td>Klasa "A" gr.1 </td>
                <td>MSS Masłów</td>
                <td>Sokół Rykoszyn</td>
                <td>14:00</td>
                <td>D. Frydryk</td>
                <td>J. Chrzanowski</td>
                <td>J. Janus</td>
              <tr>
                <td>Św. Tr. St.</td>
                <td>Neptun Końskie</td>
                <td>Korona II Kielce</td>
                <td>10:00</td>
                <td>K. Purtak</td>
                <td>R. Frączkiewicz</td>
                <td>D. Frydryk</td>
              </tr>
              <tr>
                <td>Św. Mł. St.</td>
                <td>PAS I Skarżysko</td>
                <td>GKS Zio-Max Nowiny</td>
                <td>10:00</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Św. Mł. St.</td>
                <td>AP CHAMPIONS Końskie</td>
                <td>Korona SA Kielce</td>
                <td>10:00</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Mł. St. gr. 2</td>
                <td>Radators Stąporków</td>
                <td>SAR Przyjmo</td>
                <td>09:30</td>
                <td>P. Kocia</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Mł. St. gr. 2</td>
                <td>Tęcza Gowarczów</td>
                <td>Góral Górno</td>
                <td>11:00</td>
                <td>P. Kocia</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Mł. Mł. gr. 2</td>
                <td>KS Sokół Skarżysko</td>
                <td>Gród Ćmińsk</td>
                <td>12:00</td>
                <td>A. Adamska</td>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <td>Mł. Mł. gr. 5</td>
                <td>UKS CHAMPIONS Stąporków</td>
                <td>Neptun Końskie</td>
                <td>13:00</td>
                <td>P. Kocia</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Niedziela 15.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>IV Liga</td>
                <td>Spartakus Daleszyce</td>
                <td>GKS Zio-Max Nowiny</td>
                <td>13:00</td>
                <td>A. Adamska</td>
                <td>P. Kocia</td>
                <td>B. Turski</td>
              </tr>
              <tr>
                <td>Klasa "O"</td>
                <td>Unia Sędziszów</td>
                <td>Wicher Miedziana Góra </td>
                <td>13:00</td>
                <td>K. Purtak</td>
                <td>K. Chrzanowska</td>
                <td>D. Frydryk</td>
              </tr>
              <tr>
                <td>Klasa "O"</td>
                <td>Naprzód Jędrzejów</td>
                <td>KS Victoria 2015 Skalmbierz</td>
                <td>13:00</td>
                <td>E. Kiliszek</td>
                <td>J. Moskal</td>
                <td>A. Bińkowski</td>
              </tr>
              <tr>
                <td>Klasa "A" gr. 1</td>
                <td>Skała Tumlin</td>
                <td>Victoria Mniów</td>
                <td>14:00</td>
                <td>R. Sokołowski</td>
                <td>J. Chrzanowski</td>
                <td>R. Frączkiewicz</td>
              </tr>
              <tr>
                <td>Klasa "B" gr. 1</td>
                <td>Tęcza Gowarczów</td>
                <td>ULKS Łączna</td>
                <td>11:00</td>
                <td>R. Frączkiewicz</td>
                <td>R. Sokołowski</td>
                <td>J. Chrzanowski</td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="table--container" id="nov_10-12">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Piątek 10.11.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mł. Mł. gr. 5</td>
                <td>Neptun Końskie</td>
                <td>KS Smyków</td>
                <td>19:00</td>
                <td>K. Chrzanowska</td>
                <td>K. Purtak </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Sobota 11.11.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>IV Liga</td>
                <td>Orlęta Kielce</td>
                <td>Alit Ożarów</td>
                <td>13:00</td>
                <td>E. Kiliszek</td>
                <td>J. Chrzanowski</td>
                <td>A. Adamska</td>
              <tr>
                <td>Jun. Mł. gr. 1</td>
                <td>Granat Skarżysko </td>
                <td>Sport CK</td>
                <td>10:00</td>
                <td>K. Purtak</td>
                <td>P. Kocia</td>
                <td>A. Bińkowski</td>
              </tr>
              <tr>
                <td>Mł. Mł. gr. 5</td>
                <td>PAS II Skarżysko</td>
                <td>UKS AP CHAMPIONS Końskie</td>
                <td>10:00</td>
                <td>B. Turski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Niedziela 12.10.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 10%;">Sędzia główny</th>
                <th scope="col" style="width: 10%;">Sędzia AS1</th>
                <th scope="col" style="width: 10%;">Sędzia AS2</th>
                <th scope="col" style="width: 9%;">Sędzia techniczny</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ekstraliga Kobiet</td>
                <td>Pogoń Tczew</td>
                <td>Pogoń Szczecin </td>
                <td>11:00</td>
                <td>A. Adamska</td>
                <td>A. Nowak</td>
                <td>K. Chrzanowska</td>
                <td>E. Augustyn</td>
              </tr>
              <tr>
                <td>IV Liga</td>
                <td>KS Moravia Morawica</td>
                <td>GKS Rudki </td>
                <td>13:00</td>
                <td>A. Bińkowski</td>
                <td>R. Frączkiewicz</td>
                <td>D. Frydryk</td>
              </tr>
              <tr>
                <td>Klasa "O"</td>
                <td>Orlicz Suchedniów</td>
                <td>GKS Gród Ćmińsk</td>
                <td>13:00</td>
                <td>P. Kocia</td>
                <td>J. Moskal</td>
                <td>R. Sokołowski</td>
              </tr>
              <tr>
                <td>Klasa "A" gr. 3</td>
                <td>Star II Starachowice</td>
                <td>GKS Iwaniska</td>
                <td>13:00</td>
                <td>B. Turski</td>
                <td>E. Kiliszek</td>
                <td>C. Ksel</td>
              </tr>
              <tr>
                <td>Mł. St. Gr. 2</td>
                <td>Radiators Stąporków</td>
                <td>Sokół Rykoszyn </td>
                <td>09:30</td>
                <td>E. Kiliszek</td>
                <td>B. Turski</td>
                <td> - </td>
              </tr>
              <tr>
                <td>Św. Mł. Mł.</td>
                <td>Pas I Skarżysko</td>
                <td>KS DAP II Kielce</td>
                <td>10:00</td>
                <td>R. Sokołowski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="nov_18-29">
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Sobota 18.11.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>III Liga</td>
                <td>Wisłoka Dębica</td>
                <td>Karpaty Krosno</td>
                <td>13:00</td>
                <td>A. Bińkowski</td>
                <td>J. Moskal </td>
                <td>E. Kiliszek</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Klasa "O"</td>
                <td>Gród Ćmińsk</td>
                <td>Kamienna Brody</td>
                <td>13:00</td>
                <td>K. Chrzanowska</td>
                <td>K. Purtak </td>
                <td>P. Kocia</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Klasa "O"</td>
                <td>Świt Ćmielów</td>
                <td>Partyzant Wodzisław</td>
                <td>13:00</td>
                <td>B. Turski</td>
                <td>D. Frydyrk </td>
                <td>R. Frączkiewicz</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Niedziela 19.11.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ekstralia Kobiet</td>
                <td>Stomilianki Olsztyn</td>
                <td>APLG Gdańsk</td>
                <td>12:00</td>
                <td>K. Bojar-Stefańska</td>
                <td>P. Erbel</td>
                <td class="awarded">K. Chrzanowska</td>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th colspan="9" class="awarded">
                  Środa 29.11.2023r.
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 14%;">Liga</th>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CLJ U-19</td>
                <td>Wisła Kraków</td>
                <td>Raków Częstochowa</td>
                <td>13:00</td>
                <td>A. Bińkowski</td>
                <td>J. Moskal</td>
                <td>E. Kiliszek</td>
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