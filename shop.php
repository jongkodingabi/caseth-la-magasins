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
    include "landing_page.php";
    ?>
          <!-- New Product Arrivals -->
  <section id="clothing" class="my-5 overflow-hidden">
    <div class="container pb-5">

      <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
        <h2 class="display-3 fw-normal">Newest Arrivals</h2>
        <div>
          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
            shop now
            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
              <use xlink:href="#arrow-right"></use>
            </svg></a>
        </div>
      </div>

      <div class="products-carousel swiper">
        <div class="swiper-wrapper">

          <?php 
          $sql = "SELECT * FROM tblproduct ORDER BY id DESC LIMIT 4";
          $query = mysqli_query($conn, $sql);
          while($row=mysqli_fetch_array($query)) {
          ?>
          <div class="swiper-slide">
            <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle bg-warning">
              New
            </div>
            <div class="card position-relative">
            <a href="singleproduct.php?id=<?php echo $row['id']; ?>">
              <img src="../admin-pkwu/template/images/<?php echo $row["picture"];?>" class="img-fluid rounded-4" alt="image" style="width: 345px; height: 330px;"></a>
              <div class="card-body p-0">
              <a href="singleproduct.php?id=<?php echo $row['id']; ?>">
                  <h3 class="card-title pt-4 m-0"><?php echo $row['name'];?></h3>
                </a>

                <div class="card-text">
                  <span class="rating secondary-font">
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    5.0</span>

                  <h3 class="secondary-font text-primary">Rp<?php echo $row['price'];?></h3>

                  <div class="d-flex flex-wrap mt-3">
                    <a href="singleproduct.php?id=<?php echo $row['id']; ?>" class="btn-cart me-3 px-4 pt-3 pb-3">
                      <h5 class="text-uppercase m-0">See more</h5>
                    </a>
                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                      <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                    </a>
                  </div>


                </div>

              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
        </section>

     <!-- category product -->
  <section id="foodies" class="my-5">
    <div class="container  py-5">

      <div class="section-header d-md-flex justify-content-between align-items-center">
        <h2 class="display-3 fw-normal">Our Products</h2>
        <div class="mb-4 mb-md-0">
          <p class="m-0">
            <button class="filter-button me-4  active" data-filter="*">ALL</button>
            <button class="filter-button me-4 " data-filter=".casing">CASING</button>
            <button class="filter-button me-4 " data-filter=".accsesories">ACCSESORIES</button>
            <button class="filter-button me-4 " data-filter=".bucket">BUCKET</button>
          </p>
        </div>
        <div>
          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
            shop now
            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
              <use xlink:href="#arrow-right"></use>
            </svg></a>
        </div>
      </div>

      <section>
      <div class="isotope-container row">

          <?php
          include "accsesoris.php";
          include "casing.php";
          include "bucket_items.php";
          ?>
      </section>
          
        <?php
    include "footer.php";
    ?>