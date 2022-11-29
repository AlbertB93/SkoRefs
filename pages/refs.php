<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TS Skarżysko</title>
    <link rel="stylesheet" href="../scss/style-refs.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@600;700&family=Oswald&display=swap" rel="stylesheet">
    <script src="../app.js"></script>
</head>

<body>
    <?php include("../php/header--pages.php"); ?>
    <?php include("../php/nav--pages.php"); ?>

    <main>

        <section class="popups">
            <div class="popup--main">
                <div class="popup--photo--field2">
                    <img id="AnnaAdamska" src="../images/persons/AAnna.PNG " alt="zdjecie Ani" class="popup--photo2">
                    <div class="popup--photo--text2">
                        <p> Rok urodzenia: 1993</p>
                        <p> Sędzia od: 2010r. </p>
                        <p> Obecnie: Sędzia 3 ligi</p>
                    </div>
                </div>
                <div class="popup--container2">
                    <div class="popup--name2">
                        Anna Adamska
                    </div>
                    <div class="popup--description2">
                        <p> Ania kurs skończył wiosną 2012r. Wtedy to zadebiutował na meczu ligi juniorów w Ćmińsku.</p>
                        <p> Następnie awansował z grona sędziów pozostałych do "B" klasy na początku sezonu 2012 / 2013. Po pierwszej
                            rundzie
                            awansował
                            do klasy "A". W sezonie 2013 / 2014 sędziował już w klasie Okręgowej.
                        </p>
                        <p> Ciekawostki:</p>
                        <p> Najwyższa liga jako sędzia główny: 3 Liga</p>
                        <p> Najwyższa liga jako sędzia asystent: 3 Liga</p>
                        <p> Najwyższa liga jako sędzia techniczny: 1 Liga</p>
                    </div>
                    <button class="popup--btn2" onclick="closePopup(0)">X</button>
                </div>

                <div class="popup--static">
                    <div class="static--title">Liczba meczów</div>
                    <div class="static--table">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><img src="../images/table-whistle.png" alt="WHISTLE" class="table--image"></th>
                                    <th scope="col"><img src="../images/table-flag.png" alt="WHISTLE" class="table--image"></th>
                                    <th scope="col"><img src="../images/table-table.PNG" alt="WHISTLE" class="table--image"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="dark">
                                    <td>2 liga</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>3 liga</td>
                                    <td>8</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr class="dark">
                                    <td>4 liga</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Kl. "O"</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                </tr>
                                <tr class="dark">
                                    <td>Kl. "A"</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Kl. "B"</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                </tr>
                                <tr class="dark">
                                    <td>Młodzież</td>
                                    <td>8</td>
                                    <td>7</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="popup--main">
                <div class="popup--photo--field">
                    <img id="AlbertBinkowski" src="../images/persons/BAlbert.PNG " alt="zdjecie Albert" class="popup--photo">
                    <div class="popup--photo--text">
                        <p> Rok urodzenia: 1993</p>
                        <p> Sędzia od: 2012r. </p>
                        <p> Obecnie: Sędzia 4 ligi</p>
                    </div>
                </div>
                <div class="popup--container">
                    <div class="popup--name">
                        Albert Bińkowski
                    </div>
                    <div class="popup--description">
                        <p> Albert kurs skończył wiosną 2012r. Wtedy to zadebiutował na meczu ligi juniorów w Ćmińsku.</p>
                        <p> Następnie awansował z grona sędziów pozostałych do "B" klasy na początku sezonu 2012 / 2013. Po pierwszej rundzie
                            awansował
                            do klasy "A". W sezonie 2013 / 2014 sędziował już w klasie Okręgowej.
                        </p>
                        <p> Ciekawostki:</p>
                        <p> Najwyższa liga jako sędzia główny: 3 Liga</p>
                        <p> Najwyższa liga jako sędzia asystent: 3 Liga</p>
                        <p> Najwyższa liga jako sędzia techniczny: 2 Liga</p>
                        <p> Rok urodzenia: 1993</p>
                    </div>
                    <button class="popup--btn" onclick="closePopup(1)">X</button>
                </div>
            </div>
            <div class="popup--main">
                <div class="popup--photo--field">
                    <img id="JakubChrzanowski" src="../images/persons/CJakub.PNG " alt="zdjecie Albert" class="popup--photo">
                    <div class="popup--photo--text">
                        <p> Rok urodzenia: 1993</p>
                        <p> Sędzia od: 2012r. </p>
                        <p> Obecnie: Sędzia 4 ligi</p>
                    </div>
                </div>
                <div class="popup--container">
                    <div class="popup--name">
                        Albert Bińkowski
                    </div>
                    <div class="popup--description">
                        <p> Albert kurs skończył wiosną 2012r. Wtedy to zadebiutował na meczu ligi juniorów w Ćmińsku.</p>
                        <p> Następnie awansował z grona sędziów pozostałych do "B" klasy na początku sezonu 2012 / 2013. Po
                            pierwszej rundzie
                            awansował
                            do klasy "A". W sezonie 2013 / 2014 sędziował już w klasie Okręgowej.
                        </p>
                        <p> Ciekawostki:</p>
                        <p> Najwyższa liga jako sędzia główny: 3 Liga</p>
                        <p> Najwyższa liga jako sędzia asystent: 3 Liga</p>
                        <p> Najwyższa liga jako sędzia techniczny: 2 Liga</p>
                        <p> Rok urodzenia: 1993</p>
                    </div>
                    <button class="popup--btn" onclick="closePopup(2)">X</button>
                </div>
            </div>
        </section>

        <div class="refs--main">
            <div class="list--refs--title">
                Lista sędziów sekcji Skarżysko - Kamienna
            </div>
            <div class="list--refs">
                <div class="ref--person--container" id="AA">
                    <div class="ref--person--logo" onClick="openPopup(0)">
                        <img src="../images/persons/AAnna.PNG" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Anna Adamska </p>
                        Sędzia Ekstraligi Kobiet </br>
                        <p text-align="center">Sędzia 3 ligi </br></p>
                    </div>
                </div>
                <div class="ref--person--container" id="BA">
                    <div class="ref--person--logo" onClick="openPopup(1)">
                        <img src="../images/persons/BAlbert.PNG" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Albert Bińkowski</p>
                        Sędzia 4 ligi </br>
                    </div>
                </div>
                <div class="ref--person--container" id="CJ">
                    <div class="ref--person--logo" onClick="openPopup(2)">
                        <img src="../images/persons/CJakub.PNG" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Jakub Chrzanowski</p>
                        Sędzia 4 ligi </br>
                    </div>
                </div>
                <div class="ref--person--container" id="MJ">
                    <div class="ref--person--logo">
                        <img src="../images/persons/MJakub.PNG" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Jakub Moskal</p>
                        Sędzia 4 ligi </br>
                    </div>

                </div>
                <div class="ref--person--container" id="CK">
                    <div class="ref--person--logo">
                        <img src="../images/persons/CKasia.PNG" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Katarzyna Chrzanowska</p>
                        Sędzia klasy "O" </br>
                    </div>
                </div>
                <div class="ref--person--container" id="KE">
                    <div class="ref--person--logo">
                        <img src="../images/persons/KEryk.PNG" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Eryk Kiliszek</p>
                        Sędzia klasy "O" </br>
                    </div>
                </div>
                <div class="ref--person--container" id="KP">
                    <div class="ref--person--logo">
                        <img src="../images/persons/KPaweł.PNG" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Paweł Kocia</p>
                        Sędzia klasy "O" </br>
                    </div>
                </div>
                <div class="ref--person--container" id="PK">
                    <div class="ref--person--logo">
                        <img src="../images/persons/PKarol.PNG" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Karol Purtak</p>
                        Sędzia klasy "O" </br>
                    </div>
                </div>
                <div class="ref--person--container" id="FD">
                    <div class="ref--person--logo">
                        <img src="../images/persons/FDariusz.PNG" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Dariusz Frydryk</p>
                        Sędzia klasy "A" </br>
                    </div>
                </div>
                <div class="ref--person--container" id="SR">
                    <div class="ref--person--logo">
                        <img src="../images/persons/SRafał.PNG" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Rafał Sokołowski</p>
                        Sędzia klasy "A" </br>
                    </div>
                </div>
                <div class="ref--person--container" id="DA">
                    <div class="ref--person--logo">
                        <img src="../images/persons/face.png" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Adrian Dzięcioł</p>
                        Sędzia klasy "B" </br>
                    </div>
                </div>
                <div class="ref--person--container" id="TB">
                    <div class="ref--person--logo">
                        <img src="../images/persons/face.png" alt="FELEK" class="ref--person--image">
                        <p class="ref--person--name">Błażej Turski</p>
                        Sędzia klasy "B" </br>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-text">
            Copyright Albert
        </div>
    </footer>

</body>

</html>