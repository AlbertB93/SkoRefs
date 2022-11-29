<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TS Skarżysko</title>
    <link rel="stylesheet" href="../scss/style-toDownload.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@600;700&family=Oswald&display=swap" rel="stylesheet">
    <script src="../app.js"></script>
</head>

<body>
    <?php include("../php/header--pages.php"); ?>
    <?php include("../php/nav--pages.php"); ?>
    <main>

        <div class="toDownload--main">
            <div class="toDownload--option">
                <div class="toDownload--option--title" onclick="toggle2('toDownload--option--list')">
                    Regulaminy
                </div>
                <div class="toDownload--option--list">
                    <div class="option--list">
                        <a href="../files/regulamin_rozgrywek_iv_liga_i_nizsze_sezon_2022-2023_oraz_wytyczne_w_zakresie_organizacji_meczow.pdf" download="regulamin_rozgrywek_iv_liga_i_nizsze_sezon_2022-2023_oraz_wytyczne_w_zakresie_organizacji_meczow.pdf" target="_blank">Regulamin
                            ligi</a>

                    </div>
                    <div class="option--list">
                        Regulamin PP
                    </div>
                    <div class="option--list">
                        Regulamin spadków i awansów
                    </div>
                </div>
            </div>
            <div class="toDownload--option">
                <div class="toDownload--option--title" onclick="toggle2('toDownload--option--list')">
                    Dane do meczów
                </div>
                <div class="toDownload--option--list">
                    <div class="option--list">
                        <a href="../files/Sprawozdanie_meczowe_ŚZPN.pdf" download="Sprawozdanie_meczowe_ŚZPN.pdf" target="_blank">Sprawozdanie
                            meczowe
                        </a>
                    </div>
                    <div class="option--list">
                        <a href="../files/delegacja-nowa-czysta.xlsx" download="delegacja-nowa-czysta.xlsx" target="_blank">Delegacja sędziowska
                        </a>
                    </div>
                    <div class="option--list">
                        Aktualne stawki
                    </div>
                </div>
            </div>
            <div class="toDownload--option">
                <div class="toDownload--option--title">
                    Czasopismo "Sędzia"
                </div>
                <div class="toDownload--option--list">
                    <div class="option--list">
                        Wydanie 1 / 2022
                    </div>
                    <div class="option--list">
                        Wydanie 2 / 2022
                    </div>
                    <div class="option--list">
                        Wydanie 3 / 2022
                    </div>
                    <div class="option--list">
                        Wydanie 4 / 2022
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