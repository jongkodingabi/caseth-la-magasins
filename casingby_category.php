<?php
include "connect.php";
include "header.php";
?>

<link rel="icon" type="image/x-icon" href="images/chocolat/caseths.png" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
  rel="stylesheet">

</head>

<body>
    <?php
    include "navbar.php";
    ?> 
   <section id="foodies" class="my-5">
    <center><h2 class="display-3 fw-normal center">Casing</h2></center>
    <div class="container  py-5">
    <div class="isotope-container row">
    <?php
    include "casing.php";
    ?>
    </div>
    <?php
    include "footer.php";
    ?>


