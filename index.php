<?php
require_once  './class/TrocarPage.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Projeto Pet em Risco - Adoção e proteção animal" />
    <meta name="author" content="Pet em Risco" />
    <title>Pet em Risco</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logoDark-PNG.png" media="(prefers-color-scheme: light)">
    <link rel="icon" type="image/x-icon" href="assets/img/logoLight-PNG.png" media="(prefers-color-scheme: dark)">
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet" />
    <!--  -->
  </head>

  <body id="page-top">
    <?php include './include/nav.php' ?>
  

    <!-- Header -->

   <div class="content mt-3 ">
       <?php
       $URL = $_GET['page'] ?? '';
       new TrocarPages($URL);
       ?>
   </div>


    <!-- Footer -->
    <?php include './include/footer.php' ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
