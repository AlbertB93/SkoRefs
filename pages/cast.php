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
      <div class="cast--container--month" id="month-1" onclick="displayFlex('august')">Marzec 2023r.</div>
    </div>
    </div>
  </main>
  <?php include("../php/footer.php"); ?>
  <script src="../test.js"></script>
</body>

</html>