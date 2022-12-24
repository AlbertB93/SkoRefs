<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skarżyskie Gwizdki</title>
    <link rel="stylesheet" href="../scss/style-refs.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@600;700&family=Oswald&display=swap" rel="stylesheet">
    <script src="../app.js"></script>
    <link rel="shortcut icon" href="/images/favicon.png">
</head>

<body>
    <?php include("../php/header--pages.php"); ?>
    <?php include("../php/nav--pages.php"); ?>

    <main>
        <section class="popups">
            <?php include("refs--popups.php"); ?>
        </section>
        <div class="container--title">
            <div class="title">
                Lista sędziów sekcji Skarżysko - Kamienna
            </div>
            <div class="btn--index">
                <a href="../index.php">Strona główna </a>
            </div>
        </div>
        <div class="refs--container">
            <div class="refs--container--person" id="AA">
                <div class="refs--container--person--logo" onClick="openPopup(0)">
                    <img src="../images/persons/AAnna.PNG" alt="zdjęcia Ania Adamska" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Anna Adamska </p>
                    <p> Sędzia Ekstraligi Kobiet </br></p>
                    <p>Sędzia 3 ligi</p>
                </div>
            </div>
            <div class="refs--container--person" id="BA">
                <div class="refs--container--person--logo" onClick="openPopup(1)">
                    <img src="../images/persons/BAlbert.PNG" alt="zdjęcia Albert Bińkowsk" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Albert Bińkowski</p>
                    <p> Sędzia 4 ligi</p>

                </div>
            </div>
            <div class="refs--container--person" id="CJ">
                <div class="refs--container--person--logo" onClick="openPopup(2)">
                    <img src="../images/persons/CJakub.PNG" alt="zdjęcia Jakub Chrzanowski" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Jakub Chrzanowski</p>
                    <p> Sędzia 4 ligi</p>
                </div>
            </div>
            <div class="refs--container--person" id="MJ">
                <div class="refs--container--person--logo" onClick="openPopup(3)">
                    <img src=" ../images/persons/MJakub.PNG" alt="zjdęcie Jakub Moskal" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Jakub Moskal</p>
                    <p> Sędzia 4 ligi</p>
                </div>

            </div>
            <div class="refs--container--person" id="CK">
                <div class="refs--container--person--logo" onClick="openPopup(4)">
                    <img src="../images/persons/CKasia.PNG" alt="zdjęcie Katarzyna Chrzanowska" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Katarzyna Chrzanowska</p>
                    <p> Sędzia klasy "O"</p>
                </div>
            </div>
            <div class="refs--container--person" id="KE">
                <div class="refs--container--person--logo" onClick="openPopup(5)">
                    <img src="../images/persons/KEryk.PNG" alt="zdjęcie Eryk Kiliszek" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Eryk Kiliszek</p>
                    <p> Sędzia klasy "O"</p>
                </div>
            </div>
            <div class="refs--container--person" id="KP">
                <div class="refs--container--person--logo" onClick="openPopup(6)">
                    <img src="../images/persons/KPaweł.PNG" alt="zdjęcie Paweł Kocia" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Paweł Kocia</p>
                    <p> Sędzia klasy "O"</p>
                </div>
            </div>
            <div class="refs--container--person" id="PK">
                <div class="refs--container--person--logo" onClick="openPopup(7)">
                    <img src="../images/persons/PKarol.PNG" alt="zdjęcie Karol Purtak" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Karol Purtak</p>
                    <p> Sędzia klasy "O"</p>
                </div>
            </div>
            <div class="refs--container--person" id="FD">
                <div class="refs--container--person--logo" onClick="openPopup(8)">
                    <img src="../images/persons/FDariusz.PNG" alt="zdjęcie Dariusz Frydryk" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Dariusz Frydryk</p>
                    <p> Sędzia klasy "A"</p>
                </div>
            </div>
            <div class="refs--container--person" id="SR">
                <div class="refs--container--person--logo" onClick="openPopup(9)">
                    <img src="../images/persons/SRafał.PNG" alt="zdjęcie Rafał Sokołowski" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Rafał Sokołowski</p>
                    <p> Sędzia klasy "A"</p>
                </div>
            </div>
            <div class="refs--container--person" id="DA">
                <div class="refs--container--person--logo" onClick="openPopup(10)">
                    <img src="../images/persons/DAdrian.PNG" alt="zdjęcie Adrian Dzięcioł" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Adrian Dzięcioł</p>
                    <p> Sędzia klasy "B"</p>
                </div>
            </div>
            <div class="refs--container--person" id="TB">
                <div class="refs--container--person--logo" onClick="openPopup(11)">
                    <img src="../images/persons/TBlazej.png" alt="zdjęcie Błażej Turski" class="refs--container--person--logo--image">
                    <p class="refs--container--person--logo--name">Błażej Turski</p>
                    <p> Sędzia klasy "B"</p>
                </div>
            </div>
        </div>
    </main>
    <?php include("../php/footer.php"); ?>
</body>

</html>