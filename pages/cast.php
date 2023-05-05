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
                <th class="awarded" colspan="9">
                  Ekstraliga Kobiet
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
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
                <td>K. Chrzanowska</td>
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
          <div class="cast--container--month--boxWeeks--week" id="m2-w2" onclick="displayBlock('mar_11-12')">
            11-12.03.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m2-w3" onclick="displayBlock('mar_18-19')">
            18-19.03.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m2-w4" onclick="displayBlock('mar_24-26')">
            24-26.03.2023r.
          </div>
        </div>
        <div class="table--container" id="mar_04-05">
          <table>
            <div class="table--title">
              Sobota 04.03.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  III Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 6%;">Godzina</th>
                <th scope="col" style="width: 11%;">Sędzia główny</th>
                <th scope="col" style="width: 11%;">Sędzia AS1</th>
                <th scope="col" style="width: 11%;">Sędzia AS2</th>
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
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Niedziela 05.03.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 6%;">Godzina</th>
                <th scope="col" style="width: 11%;">Sędzia główny</th>
                <th scope="col" style="width: 11%;">Sędzia AS1</th>
                <th scope="col" style="width: 11%;">Sędzia AS2</th>
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
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="mar_11-12">
          <table>
            <div class="table--title">
              Sobota 11.03.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Ekstraliga Kobiet
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 20%;">Gospodarz</th>
                <th scope="col" style="width: 20%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 6%;">Godzina</th>
                <th scope="col" style="width: 11%;">Sędzia główny</th>
                <th scope="col" style="width: 11%;">Sędzia AS1</th>
                <th scope="col" style="width: 11%;">Sędzia AS2</th>
                <th scope="col" style="width: 11%;">Sędzia techniczny</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GKS Górnik Łęczna</td>
                <td>AZS Uniwersytet Jagielloński</td>
                <td>11.03.2023r.</td>
                <td>11:30</td>
                <td>A. Adamska</td>
                <td>A. Nowak</td>
                <td>K. Chrzanowska</td>
                <td>E. Walczyńska</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Niedziela 12.03.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Stal Kunów</td>
                <td>SPARTA Kazimierza Wielka</td>
                <td>12.03.2023r.</td>
                <td>14:00</td>
                <td>J. Chrzanowski</td>
                <td>D. Frydryk</td>
                <td>E. Czubak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  MLJ U-19
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KP KSZO Ostrowiec Świętokrzyski</td>
                <td>KORONA SA II Kielce</td>
                <td>12.03.2023r.</td>
                <td>12:00</td>
                <td>J. Moskal</td>
                <td>A. Adamska</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  2 Liga Kobiet
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KSP Kielce</td>
                <td>AZS II Uniwersytet Jagielloński</td>
                <td>12.03.2023r.</td>
                <td>18:00</td>
                <td>K. Bryk</td>
                <td>K. Chrzanowska</td>
                <td>A. Nowak</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="mar_18-19">
          <table>
            <div class="table--title">
              Sobota 18.03.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  III Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Podlasie Biała Podlaska</td>
                <td>Wisłoka Dębica</td>
                <td>17.03.2023r.</td>
                <td>15:00</td>
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
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS STAR Starachowice</td>
                <td>TS 1946 NIDA Pińczów</td>
                <td>17.03.2023r.</td>
                <td>15:00</td>
                <td>J. Moskal</td>
                <td>D. Frydryk</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  CLJ U-17 kobiety
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
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sportowa Czwórka Radom</td>
                <td>Śląsk Wrocław</td>
                <td>17.03.2023r.</td>
                <td>13:00</td>
                <td>K. Bryk</td>
                <td>M. Łukasiewicz</td>
                <td>A. Bińkowski</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Niedziela 19.03.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "O"
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>OKS Opatów</td>
                <td>KS VICTORIA 2015 Skalbmierz</td>
                <td>19.03.2023r.</td>
                <td>15:00</td>
                <td>K. Purtak</td>
                <td>E. Kiliszek</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="mar_24-26">
          <table>
            <div class="table--title">
              Piątek 24.03.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Trampkarz Starszy C1
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS NEPTUN Końskie</td>
                <td>KKP Korona I Kielce</td>
                <td>24.03.2023r.</td>
                <td>19:00</td>
                <td>J. Chrzanowski</td>
                <td>A. Bińkowski</td>
                <td>E. Czubak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Młodzik Młodszy D2
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>UKS AP Champions I Końskie</td>
                <td>Czarni Połaniec</td>
                <td>24.03.2023r.</td>
                <td>17:15</td>
                <td>E. Czubak</td>
                <td>A. Bińkowski</td>
                <td>J. Chrzanowski</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Sobota 25.03.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Ekstraliga Kobiet
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>AP Orlen Gdańsk</td>
                <td>GKS GIEKSA KATOWICE</td>
                <td>25.03.2023r.</td>
                <td>13:00</td>
                <td class="awarded">A. Adamska</td>
                <td>A. Nowak</td>
                <td>P. Erbel</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>KKS Czarni Sosnowiec</td>
                <td>TME SMS Łódź</td>
                <td>25.03.2023r.</td>
                <td>11:00</td>
                <td>E. Walczyńska</td>
                <td>K. Rumin</td>
                <td class="awarded">K. Chrzanowska</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Młodzik Młodszy D2
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>UKS AP CHAMPIONS Stąporków</td>
                <td>KP KSZO 1929 I Ostrowiec Św.</td>
                <td>25.03.2023r.</td>
                <td>15:00</td>
                <td>E. Kiliszek</td>
                <td>J. Janus</td>
                <td>B. Sykulskis</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Liga Młodzik Młodszy D2
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>TĘCZA Gowarczów</td>
                <td>UKS AP CHAMPIONS II Końskie</td>
                <td>25.03.2023r.</td>
                <td>10:00</td>
                <td>B. Turski</td>
                <td>J. Janus</td>
                <td>B. Sykulskis</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Niedziela 26.03.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Stal Kunów</td>
                <td>MKS STAR Starachowice</td>
                <td>26.03.2023r.</td>
                <td>15:00</td>
                <td>A. Bińkowski</td>
                <td>K. Chrzanowska</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Alit Ożarów</td>
                <td>Orlicz Suchedniów</td>
                <td>26.03.2023r.</td>
                <td>15:00</td>
                <td>J. Moskal</td>
                <td>D. Frydryk</td>
                <td>E. Czubak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa Okręgowa
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GKS BUCOVIA Bukowa</td>
                <td>KS HETMAN Włoszczowa</td>
                <td>26.03.2023r.</td>
                <td>15:00</td>
                <td>P. Kocia</td>
                <td>M. Bator</td>
                <td>J. Chrzanowski</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="cast--container--month">
        <div class="cast--container--month--title" id="month-3" onclick="displayFlex('april')">
          Kwiecień 2023r.
        </div>
        <div class="cast--container--month--boxWeeks" id="april">
          <div class="cast--container--month--boxWeeks--week" id="m3-w1" onclick="displayBlock('apr_01-02')">
            01-02.04.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m3-w2" onclick="displayBlock('apr_05-08')">
            05-08.04.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m3-w3" onclick="displayBlock('apr_11-13')">
            11-13.04.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m3-w4" onclick="displayBlock('apr_14-16')">
            14-16.04.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m3-w5" onclick="displayBlock('apr_19-23')">
            19-23.04.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m3-w6" onclick="displayBlock('apr_26-27')">
            26-27.04.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m3-w7" onclick="displayBlock('apr_28-30')">
            28-30.04.2023r.
          </div>
        </div>
        <div class="table--container" id="apr_01-02">
          <table>
            <div class="table--title">
              Piątek 31.03.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Młodzik Młodszy D2
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PAS Skarżysko - Kamienna</td>
                <td>Korona SA Kielce</td>
                <td>31.03.2023r.</td>
                <td>16:30</td>
                <td>K. Chrzanowska</td>
                <td>J. Janus</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Sobota 01.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Liga Trampkarz Starszy Gr.4 C1
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Granat Skarżysko - Kamienna</td>
                <td>Orlęta Kielce</td>
                <td>01.04.2023r.</td>
                <td>13:00</td>
                <td>P. Kocia</td>
                <td>B. Sykulski</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Młodzik Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>UKS AP CHAMPIONS Stąporków</td>
                <td>FOOTBALL ACADEMY Jędrzejów</td>
                <td>01.04.2023r.</td>
                <td>14:00</td>
                <td>K. Purtak</td>
                <td>K. Myśliwy</td>
                <td>M. Szemberg</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Niedziela 02.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Orlicz Suchedniów</td>
                <td>GKS Rudki</td>
                <td>02.04.2023r.</td>
                <td>16:00</td>
                <td>A. Adamska</td>
                <td>P. Kocia</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Olimpia Pogoń Staszów</td>
                <td>GKS GÓRAL Górno</td>
                <td>02.04.2023r.</td>
                <td>16:00</td>
                <td>J. Chrzanowski</td>
                <td>D. Frydryk</td>
                <td>K. Chrzanowska</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa Okręgowa
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KS HETMAN Włoszczowa</td>
                <td>POLONIA BIAŁOGON Kielce</td>
                <td>02.04.2023r.</td>
                <td>16:00</td>
                <td>E. Kiliszek</td>
                <td>J. Moskal</td>
                <td>A. Bińkowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" Gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Skała Tumlin</td>
                <td>ULKS Łączna</td>
                <td>02.04.2023r.</td>
                <td>12:00</td>
                <td>D. Frydryk</td>
                <td>J. Chrzanowski</td>
                <td>K. Chrzanowska</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Junior Starszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>Granat Skarżysko - Kamienna</td>
                <td>02.04.2023r.</td>
                <td>10:00</td>
                <td>A. Bińkowski</td>
                <td>J. Moskal</td>
                <td>E. Kiliszek</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Młodzik Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>Wierna Małogoszcz</td>
                <td>02.04.2023r.</td>
                <td>12:00</td>
                <td>M. Bator</td>
                <td>B. Sykulski</td>
                <td>J. Janus</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="apr_05-08">
          <table>
            <div class="table--title">
              Środa 05.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  5 runda Okręgowego Puchau Polski
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>Korona II Kielce</td>
                <td>05.04.2023r.</td>
                <td>16:00</td>
                <td>J. Chrzanowski</td>
                <td>A.Bińkowski</td>
                <td>J. Moskal</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Sobota 08.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Alit Ożarów</td>
                <td>GKS GÓRAL Górno</td>
                <td>08.04.2023r.</td>
                <td>12:00</td>
                <td>A. Bińkowski</td>
                <td>D. Frydryk</td>
                <td>E. Kiliszek</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Stal Kunów</td>
                <td>AKS Busko Zdrój</td>
                <td>08.04.2023r.</td>
                <td>15:00</td>
                <td>J. Moskal</td>
                <td>R. Sokołowski</td>
                <td>K. Purtak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa Okręgowa
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>POLONIA BIAŁOGON Kielce</td>
                <td>OKS Opatów</td>
                <td>08.04.2023r.</td>
                <td>12:00</td>
                <td>P. Kocia</td>
                <td>J. Chrzanowski</td>
                <td>E. Czubak</td>
              </tr>
            </tbody>

          </table>
        </div>
        <div class="table--container" id="apr_11-13">
          <table>
            <div class="table--title">
              Wtorek 11.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Trampkarz Starszy C1
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>Wisła Junior Sandomierz</td>
                <td>11.04.2023r.</td>
                <td>12:00</td>
                <td>B. Turski</td>
                <td>K. Chrzanowska</td>
                <td>K. Myśliwy</td>
              </tr>
            </tbody>
            <tr>
              <th class="awarded--small" colspan="9">
                Świętokrzyska Liga Młodzik Młodszy D2
              </th>
            </tr>
            <tbody>
              <tr>
                <td>UKS AP Champions I Końskie</td>
                <td>Wisła Junior Sandomierz</td>
                <td>11.04.2023r.</td>
                <td>14:00</td>
                <td>K. Chrzanowska</td>
                <td>B. Turski</td>
                <td> - </td>
              </tr>
            </tbody>
            <tr>
              <th class="awarded--small" colspan="9">
                Okręgowa Liga Młodzik Młodszy D2
              </th>
            </tr>
            <tbody>
              <tr>
                <td>PAS II Skarżysko - Kamienna</td>
                <td>Arka Pawłów</td>
                <td>11.04.2023r.</td>
                <td>17:00</td>
                <td>J. Janus</td>
                <td>E. Kiliszek</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Środa 12.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Stal Kunów</td>
                <td>Sparta Kazimierza Wielka</td>
                <td>22.04.2023r.</td>
                <td>16:45</td>
                <td>J. Chrzanowski</td>
                <td>D. Frydryk</td>
                <td>K. Purtak</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Czwartek 13.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Junior Starszy
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>KKP Korona Kielce</td>
                <td>13.04.2023r.</td>
                <td>17:00</td>
                <td>K. Chrzanowska</td>
                <td>J. Moskal</td>
                <td>A. Bińkowski</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="apr_14-16">
          <table>
            <div class="table--title">
              Piątek 14.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Trampkarz Starszy
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>KKP Korona II Kielce</td>
                <td>14.04.2023r.</td>
                <td>19:00</td>
                <td>K. Myśliwy</td>
                <td>K. Chrzanowska</td>
                <td>J. Janus</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Sobota 15.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  III Liga </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Lechia Tomaszów Mazowiecki</td>
                <td>Concordia Elbląg</td>
                <td>15.04.2023r.</td>
                <td>15:30</td>
                <td>A. Adamska</td>
                <td>A. Nowak</td>
                <td>K. Chrzanowska</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Star Starachowice</td>
                <td>Wierna Małogoszcz</td>
                <td>15.04.2023r.</td>
                <td>16:00</td>
                <td>J. Chrzanowski</td>
                <td>E. Kiliszek</td>
                <td>P. Kocia</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "O" </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sparta Dwikozy</td>
                <td>Piaskowianka Piaski</td>
                <td>15.04.2023r.</td>
                <td>12:00</td>
                <td>K. Purtak</td>
                <td>A. Bińkowski</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  "A" klasa </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Partyzant Radoszyce</td>
                <td>Tęcza Gowarczów</td>
                <td>15.04.2023r.</td>
                <td>15:00</td>
                <td>D. Frydryk</td>
                <td>J. Moskal</td>
                <td>J. Janus</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Młodzik Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>UKS AP Champions I Końskie</td>
                <td>KKP Korona I Kielce</td>
                <td>15.04.2023r.</td>
                <td>12:15</td>
                <td>J. Moskal</td>
                <td>D. Frydryk</td>
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
                <td>FC Łączna</td>
                <td>AKS Busko Zdrój</td>
                <td>15.04.2023r.</td>
                <td>12:00</td>
                <td>E. Kiliszek</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Młodzik Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>UKS AP CHAMPIONS Stąporków</td>
                <td>Spartakus Daleszyce</td>
                <td>15.04.2023r.</td>
                <td>12:00</td>
                <td>J. Jakub</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Liga Młodzik Starszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Radiators Stąporków</td>
                <td> MSS Masłów </td>
                <td>15.04.2023r.</td>
                <td>09:30</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Liga Młodzik Starszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>UKS Celsium Skarżysko </td>
                <td>Spartakus Daleszyce</td>
                <td>15.04.2023r.</td>
                <td>10:00</td>
                <td>P. Kocia</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Liga Młodzik Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PAS II Skarżysko </td>
                <td>Tęcza Gowarczów</td>
                <td>15.04.2023r.</td>
                <td>11:30</td>
                <td>P. Kocia</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Niedziela 16.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Klimontowianka Klimontów</td>
                <td>Sparta Kazimierza Wielka</td>
                <td>16.04.2023r.</td>
                <td>11:00</td>
                <td>A. Bińkowski</td>
                <td>K. Chrzanowska</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa Okręgowa
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Łysica Bodzentyn </td>
                <td>KS Victoria 2015 Skalbmierz</td>
                <td>16.04.2023r.</td>
                <td>16:00</td>
                <td>E. Kiliszek</td>
                <td>J. Moskal</td>
                <td>K. Purtak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "B" Gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>TOPSPIN Promnik</td>
                <td>GKS Zio-Max II Nowiny</td>
                <td>16.04.2023r.</td>
                <td>15:00</td>
                <td>B. Turski</td>
                <td>J. Chrzanowski</td>
                <td>M. Bator</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Junior Starszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Granat Skarżysko - Kamienna</td>
                <td>STAR Starachowice</td>
                <td>16.04.2023r.</td>
                <td>10:00</td>
                <td>P. Kocia</td>
                <td>B. Turski</td>
                <td>D. Frydryk</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="apr_19-23">
          <table>
            <div class="table--title">
              Środa 19.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  1/4 PP Kobiet
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>TME SMS Łódź</td>
                <td>GKS GÓRNIK Łęczna</td>
                <td>18.04.2023r.</td>
                <td>16:00</td>
                <td>E. Szymula</td>
                <td class="awarded">K. Chrzanowska</td>
                <td>M. Pietrzyk</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Sobota 21.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Ekstraliga Kobiet </th>
              </tr>
              <tr>
                <th scope="col" style="width: 18%;">Gospodarz</th>
                <th scope="col" style="width: 18%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
                <th scope="col" style="width: 13%;">Sędzia techniczny</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>AP Orlen Gdańsk</td>
                <td>GKS GÓRNIK Łęczna</td>
                <td>22.04.2023r.</td>
                <td>11:00</td>
                <td>E. Szymula</td>
                <td class="awarded">K. Chrzanowska</td>
                <td>M. Pietrzyk</td>
                <td>K. Misiewicz</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  CLJ U-19 </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jagiellonia Białystok</td>
                <td>Lechia Gdańk</td>
                <td>22.04.2023r.</td>
                <td>15:00</td>
                <td class="awarded">A. Adamska</td>
                <td>A. Ulanowska</td>
                <td>G. Zabawa</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr. 1</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KS Smyków</td>
                <td>Skała Tumlin</td>
                <td>22.04.2023r.</td>
                <td>16:30</td>
                <td>B. Turski</td>
                <td>J. Chrzanowski</td>
                <td>E. Czubak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Liga Junior Starszy gr. 4 </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Orlicz Suchedniów</td>
                <td>Sparta Dwikozy</td>
                <td>22.04.2023r.</td>
                <td>10:00</td>
                <td>R. Sokołowski</td>
                <td>J. Moskal</td>
                <td>D. Frydryk</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Liga Młodzik Starszy gr. 7
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>Naprzód Jędrzejów</td>
                <td>22.04.2023r.</td>
                <td>10:00</td>
                <td>J. Janus</td>
                <td>K. Purtak </td>
                <td>P. Kocia </td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Radiators Stąporków</td>
                <td>Polonia BIAŁOGON Kielce </td>
                <td>22.04.2023r.</td>
                <td>12:00</td>
                <td>K. Purtak </td>
                <td>P. Kocia </td>
                <td>J. Janus</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Młodzik Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pas Skarżysko</td>
                <td>Czarni Połaniec</td>
                <td>22.04.2023r.</td>
                <td>10:00</td>
                <td>A. Bińkowski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Liga Młodzik Młodszy gr. 6
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Łyscia Bodzentyn</td>
                <td>PAS II Skarżysko</td>
                <td>22.04.2023r.</td>
                <td>12:00</td>
                <td>E. Kiliszek</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Tęcza Gowarczów</td>
                <td>Arka Pawłów</td>
                <td>22.04.2023r.</td>
                <td>11:00</td>
                <td>K. Myśliwy</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Niedziela 23.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Klimontowianka Klimontów</td>
                <td>Olimpia Pogoń Staszów</td>
                <td>22.04.2023r.</td>
                <td>11:00</td>
                <td>A. Adamska</td>
                <td>D. Frydryk</td>
                <td>P. Kocia</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>Nida Pińczów</td>
                <td>Orlęta Kielce</td>
                <td>22.04.2023r.</td>
                <td>12:00</td>
                <td>J. Moskal</td>
                <td>R. Sokołowski</td>
                <td>K. Purtak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa Okręgowa
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GKS BUCOVIA Bukowa </td>
                <td>Naprzód Jędrzejów</td>
                <td>22.04.2023r.</td>
                <td>14:00</td>
                <td>K. Chrzanowska</td>
                <td>A. Bińkowski</td>
                <td>M. Bator</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "B" Gr. 1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Granat Borki</td>
                <td>KS Kamienna Wola</td>
                <td>22.04.2023r.</td>
                <td>10:00</td>
                <td>A. Bińkowski</td>
                <td>K. Chrzanowska</td>
                <td>M. Bator</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Liga Trampkarz Starszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Granat Skarżysko - Kamienna</td>
                <td>GKS Zio-Max II Nowiny</td>
                <td>22.04.2023r.</td>
                <td>11:00</td>
                <td>B. Sykulski</td>
                <td>B. Turski</td>
                <td>E. Czubak</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>Piaskowianka Piaski</td>
                <td>22.04.2023r.</td>
                <td>10:00</td>
                <td>J. Janus</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="apr_26-27">
          <table>
            <div class="table--title">
              Środa 26.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  1/4 Okręgowego PP
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Star Starachowice</td>
                <td>Korona SA III Kielce</td>
                <td>26.04.2023r.</td>
                <td>16:45</td>
                <td>A. Bińkowski</td>
                <td>J. Chrzanowski</td>
                <td>E. Kiliszek</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Czwartek 27.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  2 Liga Kobiet </th>
              </tr>
              <tr>
                <th scope="col" style="width: 18%;">Gospodarz</th>
                <th scope="col" style="width: 18%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
                <th scope="col" style="width: 13%;">Sędzia techniczny</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>KS Raszyn</td>
                <td>KU AZS Uniwersytet</td>
                <td>27.04.2023r.</td>
                <td>18:30</td>
                <td class="awarded">A. Adamska</td>
                <td>A. Nowak</td>
                <td>A. Banasiak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Junior Starszy</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Netun Końskie</td>
                <td>Star Starachowice</td>
                <td>27.04.2023r.</td>
                <td>17:00</td>
                <td>M. Bator</td>
                <td>J. Moskal</td>
                <td>D. Frydryk</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Liga Trampkarz Starszy gr. 5
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>Sport II CK</td>
                <td>27.04.2023r.</td>
                <td>19:00</td>
                <td>J. Moskal</td>
                <td>M. Bator</td>
                <td>D. Frydryk</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="apr_28-30">
          <table>
            <div class="table--title">
              Piątek 28.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  4 Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GKS Góral Górno</td>
                <td>Nida Pińcżów</td>
                <td>28.04.2023r.</td>
                <td>17:30</td>
                <td>A. Bińkowski</td>
                <td>K. Chrzanowska</td>
                <td>P. Kocia</td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Sobota 29.04.2023r.
            </div>
            <thead>
              <tr>
                <th scope="col" style="width: 18%;">Gospodarz</th>
                <th scope="col" style="width: 18%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
                <th scope="col" style="width: 13%;">Sędzia techniczny</th>
              </tr>
            </thead>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  2 Liga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pogoń Siedlce</td>
                <td>Lech II Poznań</td>
                <td>29.04.2023r.</td>
                <td>17:00</td>
                <td>A. Kozieł</td>
                <td>D. Wrona</td>
                <td>G. Olejarczyk</td>
                <td class="awarded">A. Adamska</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  2 Liga Kobiet </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PTC Pabianice</td>
                <td>GSS Gordzisk</td>
                <td>29.04.2023r.</td>
                <td>15:00</td>
                <td>K. Bryk</td>
                <td class="awarded">K. Chrzanowska</td>
                <td>N. Szadkowska</td>
              </tr>
            </tbody>
            <thead>
              <th class="awarded" colspan="9">
                4 Liga
              </th>
            </thead>
            <tbody>
              <tr>
                <td>GKS Zio-Max Nowiny</td>
                <td>Spartakus Daleszyce</td>
                <td>29.04.2023r.</td>
                <td>11:00</td>
                <td>J. Chrzanowski</td>
                <td>K. Purtak</td>
                <td>E. Kiliszek</td>
              </tr>
            </tbody>
            <thead>
              <th class="awarded" colspan="9">
                Klasa "O"
              </th>
            </thead>
            <tbody>
              <tr>
                <td>Łysica Bodzentyn</td>
                <td>Świt Ćmielów</td>
                <td>29.04.2023r.</td>
                <td>15:00</td>
                <td>P. Kocia</td>
                <td>D. Frydryk</td>
                <td>R. Sokołowski</td>
              </tr>
            </tbody>
            <thead>
              <th class="awarded" colspan="9">
                Klasa "B" gr. 1
              </th>
            </thead>
            <tbody>
              <tr>
                <td>KS Kamienna Wola</td>
                <td>Orlęta II Kielce</td>
                <td>29.04.2023r.</td>
                <td>16:00</td>
                <td>B. Turski</td>
                <td>J. Moskal</td>
                <td>M. Bator</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Młodzik Młodszy gr. 6
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PAS II Skarżysko-Kamienna</td>
                <td>FKS ŁAZY Starachowice</td>
                <td>29.04.2023r.</td>
                <td>09:30</td>
                <td>A. Bińkowski</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>TĘCZA Gowarczów</td>
                <td>ŁYSICA Bodzentyn</td>
                <td>29.04.2023r.</td>
                <td>11:00</td>
                <td>K. Chrzanowska</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Niedziela 30.04.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Klasa "A" gr.1
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 22%;">Gospodarz</th>
                <th scope="col" style="width: 22%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GKS 4 ECO ASTRA Piekoszów</td>
                <td>TĘCZA Gowarczów</td>
                <td>30.04.2023r.</td>
                <td>15:00</td>
                <td>D. Frydryk</td>
                <td>E. Kiliszek</td>
                <td>J. Chrzanowski</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>SKAŁA Tumlin</td>
                <td>SOKÓŁ-NORDKALK GÓRNIK Rykoszyn</td>
                <td>30.04.2023r.</td>
                <td>15:00</td>
                <td>R. Sokołowski</td>
                <td>K. Chrzanowska</td>
                <td>P. Kocia</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Trampkarz Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>FC ŁĄCZNA</td>
                <td>UKS Baćkowice</td>
                <td>30.04.2023r.</td>
                <td>10:00</td>
                <td>B. Sykulski</td>
                <td>A. Bińkowski</td>
                <td>J. Janus </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Świętokrzyska Liga Młodzik Młodszy
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>UKS AP CHAMPIONS Stąporków</td>
                <td>AP KopalniaTalentów MORAVIA Morawica</td>
                <td>30.04.2023r.</td>
                <td>13:00</td>
                <td>J. Janus </td>
                <td>B. Sykulski</td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="cast--container--month">
        <div class="cast--container--month--title" id="month-4" onclick="displayFlex('may')">
          Maj 2023r.
        </div>
        <div class="cast--container--month--boxWeeks" id="may">
          <div class="cast--container--month--boxWeeks--week" id="m4-w1" onclick="displayBlock('may_03')">
            03.05.2023r.
          </div>
          <div class="cast--container--month--boxWeeks--week" id="m4-w2" onclick="displayBlock('may_06-07')">
            06-07.05.2023r.
          </div>
        </div>
        <div class="table--container" id="may_03">
          <table>
            <div class="table--title">
              Środa 03.05.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  Półfinał Pucharu Polski Kobiet
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 16%;">Gospodarz</th>
                <th scope="col" style="width: 16%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
                <th scope="col" style="width: 12%;">Sędzia techniczny</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>AP Orlen Gdańsk</td>
                <td>AZS UJ Kraków</td>
                <td>03.05.2023r.</td>
                <td>13:00</td>
                <td>A. Adamska</td>
                <td>A. Nowak</td>
                <td>K. Chrzanowska</td>
                <td>E. Szymula</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  "A" klasa gr.1
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ULKS Łączna </td>
                <td>Zryw Łopuszno</td>
                <td>03.05.2023r.</td>
                <td>17:00</td>
                <td>R. Sokołowski</td>
                <td>K. Purtak</td>
                <td>J. Moskal</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table--container" id="may_06-07">
          <table>
            <div class="table--title">
              Sobota 06.05.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  III Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 16%;">Gospodarz</th>
                <th scope="col" style="width: 16%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jagiellonia II Białystok</td>
                <td>Pelikan Łowicz</td>
                <td>06.05.2023r.</td>
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
                <td>Star Starachowice </td>
                <td>MKS Olipia-Pogoń Staszów</td>
                <td>06.05.2023r.</td>
                <td>17:00</td>
                <td>A. Bińkowski</td>
                <td>D. Frydryk</td>
                <td>K. Purtak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Junior Starszy gr. 4
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Orlicz Suchedniów</td>
                <td>GKS ESTER Wojciechowice</td>
                <td>06.05.2023r.</td>
                <td>10:00</td>
                <td>B. Turski</td>
                <td>J. Moskal</td>
                <td>J. Chrzanowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Trampkarz Starszy Gr. 5
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>Lechia Strawczyn</td>
                <td>06.05.2023r.</td>
                <td>12:00</td>
                <td>K. Myśliwy</td>
                <td>J. Janus</td>
                <td>E. Czubak</td>
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
                <td>PAS Skarżysko-Kamienna </td>
                <td>KKP KORONA I Kielce </td>
                <td>06.05.2023r.</td>
                <td>10:00</td>
                <td>P. Kocia</td>
                <td>R. Sokołowski</td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Młodzik Starszy gr. 7
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MKS Neptun Końskie</td>
                <td>KS HETMAN II Włoszczowa</td>
                <td>06.05.2023r.</td>
                <td>14:00</td>
                <td>J. Janus</td>
                <td>K. Myśliwy</td>
                <td>E. Czubak</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Młodzik Starszy gr. 8
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>RADIATOR$ Stąporków</td>
                <td>ORLĘTA Kielce</td>
                <td>06.05.2023r.</td>
                <td>09:15</td>
                <td>K. Purtak</td>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Młodzik Młodszy gr. 6
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>UKS AP CHAMPIONS II Końskie</td>
                <td>TĘCZA Gowarczów</td>
                <td>06.05.2023r.</td>
                <td>10:00</td>
                <td>E. Czubak</td>
                <td>J. Janus</td>
                <td> - </td>
              </tr>
            </tbody>
          </table>
          <table>
            <div class="table--title">
              Niedziela 07.05.2023r.
            </div>
            <thead>
              <tr>
                <th class="awarded" colspan="9">
                  IV Liga
                </th>
              </tr>
              <tr>
                <th scope="col" style="width: 16%;">Gospodarz</th>
                <th scope="col" style="width: 16%;">Gość</th>
                <th scope="col" style="width: 10%;">Data</th>
                <th scope="col" style="width: 7%;">Godzina</th>
                <th scope="col" style="width: 13%;">Sędzia główny</th>
                <th scope="col" style="width: 13%;">Sędzia AS1</th>
                <th scope="col" style="width: 13%;">Sędzia AS2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Spartakus Daleszyce</td>
                <td>Orlicz Suchedniów</td>
                <td>07.05.2023r.</td>
                <td>17:00</td>
                <td>J. Moskal</td>
                <td>R. Sokołowski</td>
                <td>P. Kocia</td>
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
                <td>GKS GRÓD Ćmińsk </td>
                <td>NAPRZÓD Jędrzejów</td>
                <td>07.05.2023r.</td>
                <td>17:00</td>
                <td>E. Kiliszek</td>
                <td>K. Chrzanowska</td>
                <td>K. Purtak</td>
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
                <td>Tęcza Gowarczów</td>
                <td>Skała Tumlin</td>
                <td>07.05.2023r.</td>
                <td>11:00</td>
                <td>R. Sokołowski</td>
                <td>P. Kocia</td>
                <td>B. Sykulski</td>
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
                <td>Samson Samsonów </td>
                <td>GKS 4 ECO ASTRA Piekoszów</td>
                <td>07.05.2023r.</td>
                <td>11:00</td>
                <td>J. Chrzanowski</td>
                <td>A. Bińkowski</td>
                <td>D. Frydryk</td>
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
                <td>TOPSPIN Promnik </td>
                <td>AZS POLITECHNIKA ŚW. Kielce</td>
                <td>07.05.2023r.</td>
                <td>11:00</td>
                <td>D. Frydryk</td>
                <td>J. Chrzanowski</td>
                <td>A. Bińkowski</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th class="awarded--small" colspan="9">
                  Okręgowa Trampkarz Starszy gr. 4
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Granat Skarżysko - Kamienna</td>
                <td>SPARTAKUS Daleszyce</td>
                <td>07.05.2023r.</td>
                <td>10:00</td>
                <td>K. Chrzanowska</td>
                <td>K. Purtak</td>
                <td>B. Turski</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
  <?php include("../php/footer.php"); ?>
  <script src="../castEngine.js"></script>
</body>

</html>