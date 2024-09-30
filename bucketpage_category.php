<?php
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

<?php
include "connect.php";
// while($row = mysqli_fetch_array($query)) {
// // $name = $row['name'];
// // $picture = $row['picture'];
// // $price = $row['price'];

// }
?>

<body>
    <?php
    include "navbar.php";
    // include "landing_page.php";
    ?> 
   <!-- category product -->
  <section id="foodies" class="my-5">
    <div class="container  py-5">

      <div class="section-header d-md-flex justify-content-between align-items-center">
        <h2 class="display-3 fw-normal">Bucket</h2>
        <div class="mb-4 mb-md-0">
  <p class="m-0">
    <button class="filter-button me-4 active" data-filter="*">ALL</button>
    <button class="filter-button me-4" data-filter=".kawat_bulu">Kawat Bulu</button>
    <button class="filter-button me-4" data-filter=".pita_satin">Pita Satin</button>
  </p>
</div>

        <div style="opacity: 0;">
          <a class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
            shop now
            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
              <use xlink:href="#arrow-right"></use>
            </svg></a>
        </div>
      </div>

      <div class="isotope-container row">

    <?php
    include "bucket_category.php";
    ?>
    </div>
    <?php
    include "footer.php";
    ?>
    

