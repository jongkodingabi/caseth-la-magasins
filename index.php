<?php
include "header.php";
include "connect.php";
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
   <style>
        .carousel-container {
            max-width: 1500px; /* Ukuran maksimal carousel */
            margin: 50px auto; /* Pusatkan carousel di halaman */
        }

        .btn-custom:hover {
            background-color:  #ff9900;
            border-color:  #ff9900;
            color: white;
        }

        .form-control::placeholder {
        color: rgba(0, 0, 0, 0.3); /* Mengatur warna placeholder dengan transparansi */
    }

    /* Animasi untuk efek fade-in */
    @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
             }
}

    </style>
</head>
<body>
    <?php
    include "navbar.php";
    include "landing_page.php";
    ?>
        <!-- icon category -->
  <section id="categories">
    <div class="container my-3 py-5">
      <div class="row my-5">
        <div class="col text-center">
          <a href="#" class="categories-item">
            <img src="images/hp.svg" alt="" width="120px">
            <h5 style="margin-top: 20px;">Phone Case</h5>
          </a>
        </div>
        <div class="col text-center">
          <a href="#" class="categories-item">
            <img src="images/bracelet.svg" alt="" width="120px">
            <h5 style="margin-top: 20px;">Accsesories</h5>
          </a>
        </div>
        <div class="col text-center">
          <a href="#" class="categories-item">
            <img src="images/flower.svg" alt="" width="120px">
            <h5 style="margin-top: 20px;">Flower Bucket</h5>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

    </div>
  </section>
      <!-- ads series -->
      <?php 
      $sql = "SELECT * FROM tableads";
      $query = mysqli_query($conn, $sql);

if ($query && mysqli_num_rows($query) > 0) {
?>

<div class="carousel-container">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">

            <?php 
            $active = true;
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="carousel-item <?php if($active) { echo 'active'; $active = false; } ?>">
                    <img src="images/<?php echo $row['picture']; ?>" class="d-block w-100" alt="<?php echo $row['title']; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $row['title']; ?></h5>
                    </div>
                </div>
            <?php 
            }
            ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<?php 
} else {
    echo "No ads found.";
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <section id="bestselling" class="my-5 overflow-hidden">
    <div class="container py-5 mb-5">

      <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
        <h2 class="display-3 fw-normal">Best selling products</h2>
        <div>
          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
            shop now
            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
              <use xlink:href="#arrow-right"></use>
            </svg></a>
        </div>
      </div>

      <div class="swiper bestselling-swiper">
    <div class="swiper-wrapper">
        <?php 
            $sql = "SELECT * FROM tblproduct WHERE seller = 'product_top'";
            $query = mysqli_query($conn, $sql);

            if ($query && mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_array($query)) {
        ?>
        <div class="swiper-slide">
            <div class="card position-relative">
                <a href="singleproduct.php?id=<?php echo $row['id']; ?>"><img src="../admin-pkwu/template/images/<?php echo $row['picture']; ?>" class="img-fluid rounded-4" alt="image"
                style="width: 500px; height: 320px;"></a>
                <div class="card-body p-0">
                    <a href="singleproduct.php?id=<?php echo $row['id']; ?>">
                        <h3 class="card-title pt-4 m-0"><?php echo $row['name']; ?></h3>
                    </a>
                    <div class="card-text">
                        <span class="rating secondary-font">
                            <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                            <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                            <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                            <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                            <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                            5.0
                        </span>
                        <h3 class="secondary-font text-primary"><?php echo $row['price']; ?></h3>
                        <div class="d-flex flex-wrap mt-3">
                            <a href="singleproduct.php?id=<?php echo $row['id']; ?>"class="btn-cart me-3 px-4 pt-3 pb-3">
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
            } else {
                echo "<p>No products found.</p>";
            }
        ?>
    </div>
</div>
</section>
       
   
  <section id="banner-2" class="my-3" style="background: #F9F3EC;">
    <div class="container">
      <div class="row flex-row-reverse banner-content align-items-center">
        <div class="img-wrapper col-12 col-md-6">
          <img src="images/1-bg.png" class="img-fluid">
        </div>
        <div class="content-wrapper col-12 offset-md-1 col-md-5 p-5">
          <div class="secondary-font text-primary text-uppercase mb-3 fs-4">Upto 40% off</div>
          <h2 class="banner-title display-1 fw-normal">Upgrade Your Beauty With Caseths
          </h2>
          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
            Explore now!!
            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
              <use xlink:href="#arrow-right"></use>
            </svg></a>
        </div>

      </div>
    </div>
  </section>
    </div>
  </section>

  <section id="advice" style="background: url('images/bg-header.png') no-repeat;">
    <div class="container ">
      <div class="row my-5 py-5">
        <div class="offset-md-3 col-md-6 my-5 ">
          <h2 class="display-3 fw-normal text-center"> Give Us <span class="text-primary">Advice here</span>
          </h2>
          <form id="myForm" action="simpanulasan.php" method="post" class="form">
          <div class="mb-3">
          <div class="mb-3">
            <input type="email" class="form-control form-control-lg" name="email" id="email"
                placeholder="Email">
            </div>
        <div class="mb-3">
            <input type="text" class="form-control form-control-lg" name="nama" id="nama"
                placeholder="Your name">
            </div>
        <div class="mb-3">
            <input type="text" class="form-control form-control-lg" name="ulasan" id="ulasan"
                placeholder="Give advice">
            </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-lg rounded-1 btn-custom">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        var formData = new FormData(this);
        
        // Submit form data using AJAX
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Ulasan terkirim",
                    showConfirmButton: false,
                    timer: 1700
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.message
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!'
            });
            console.error('Error:', error);
        });
    });
</script>
  </section>
  <section id="about" class="my-5">
    <div class="container py-5 my-5">
      <div class="row mt-5">
        <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
          <h2 class="display-3 fw-normal">Superiority</h2>
          <div>
           <!-- <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                <use xlink:href="#arrow-right"></use> -->
              </svg></a>
          </div>
        </div>
      </div>
      <?php 
$sql = "SELECT * FROM tblpromotion";
$query = mysqli_query($conn, $sql);

if ($query && mysqli_num_rows($query) > 0) {
?>
<div class="container">
    <div class="row d-flex flex-nowrap overflow-auto">
        <?php while ($row = mysqli_fetch_array($query)) { ?>
        <div class="col-md-4 my-4 my-md-0 flex-shrink-0">
            <div class="z-1 position-absolute rounded-3 m-2 px-3 pt-1 bg-light">
                <!-- <h3 class="secondary-font text-primary m-0">20</h3>
                <p class="secondary-font fs-6 m-0">Feb</p> -->
            </div>
            <div class="card position-relative">
                <a href="single-post.html"><img src="images/<?php echo $row['picture']; ?>" class="img-fluid rounded-4" alt="image"></a>
                <div class="card-body p-0">
                    <a href="single-post.html">
                        <h3 class="card-title pt-4 pb-3 m-0"><?php echo $row['title']; ?></h3>
                    </a>
                    <div class="card-text">
                        <p class="blog-paragraph fs-6"><?php echo $row['body']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php 
} 
?>
 </section>
<?php
include "footer.php";
?>

<script src="js/search.js"></script>
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/swiper-bundle.js"></script>
  <script src="js/boostrap-bundle.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="js/icon.js"></script>
