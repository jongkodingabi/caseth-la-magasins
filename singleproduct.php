<?php
// Include koneksi database
include 'connect.php'; 
session_start();

// Mendapatkan id produk dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan data produk berdasarkan ID
    $sql = "SELECT * FROM tblproduct WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    // Mengambil komentar untuk produk ini
    $sql_comments = "SELECT *, balasan FROM tblcomments WHERE product_id = '$id' ORDER BY created_at DESC";
    $query_comments = mysqli_query($conn, $sql_comments);
} else {
    echo "Produk tidak ditemukan.";
    exit;
}

// Proses submit komentar
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comment'])) {
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $sql_insert_comment = "INSERT INTO tblcomments (product_id, comment, created_at) VALUES ('$id', '$comment', NOW())";
    if (mysqli_query($conn, $sql_insert_comment)) {
        echo "Komentar berhasil ditambahkan!";
        // Refresh halaman setelah submit
        header("Location: singleproduct.php?id=$id");
        exit;
    } else {
        echo "Gagal menambahkan komentar.";
    }
}
?>

<?php
include "header.php";
?>

    <title><?php echo $row['name']; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
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
    <?php
    include "navbar.php";
    ?>
    
    <style>
        footer {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

footer .column {
    flex: 1;
    margin: 0 10px;
}

    small {
    color: rgba(0, 0, 0, 0.7); /* Mengatur warna placeholder dengan transparansi */

    }
</style>

</head>
<body>
    <!-- Product section-->
    <section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-start">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img class="card-img-top" src="../admin-pkwu/template/images/<?php echo $row['picture']; ?>" alt="<?php echo $row['name']; ?>" />
            </div>
            <div class="col-lg-6">
                <div class="small mb-1">SKU</div>
                <h1 class="display-5 fw-bolder"><?php echo $row['name']; ?></h1>
                <div class="fs-5 mb-5">
                    <h3 class="secondary-font text-primary">Rp<?php echo $row['price']; ?></h3>
                </div>
                <div class="d-flex flex-wrap mt-3">
                    <a href="https://linktr.ee/Cas_LaMagasinss" class="btn-cart me-3 px-4 pt-3 pb-3">
                        <h5 class="text-uppercase m-0">Visit the store</h5>
                    </a>
                    <a href="#" class="btn-wishlist px-4 pt-3">
                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comment section -->
<?php
// Atur timezone ke Asia/Jakarta
date_default_timezone_set('Asia/Jakarta');

function timeAgo($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $string = [
        'y' => 'year',
        'm' => 'month',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    ];
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>

 <!-- Comment section -->
 <section class="py-5">
       <div class="container px-4 px-lg-5 my-5">
           <div class="row gx-4 gx-lg-5 align-items-start">
               <div class="col-md-6">
 <h4>Anonym Comments</h4>
                    <div class="comments-container" style="border: 2px solid #ccc; padding: 10px; max-height: 300px; overflow-y: auto;">
                        <?php while($comment = mysqli_fetch_array($query_comments)): ?>
                        <div class="comment mb-4">
                            <h6><?php echo htmlspecialchars($comment['comment']); ?></h6>
                            <small>Posted on <?php echo timeAgo($comment['created_at']); ?></small>

                            <?php if (!empty($comment['balasan'])): ?>
                            <details>
                                <summary>Replied Messages</summary>
                                <h6><?php echo htmlspecialchars($comment['balasan']); ?></h6>
                                <small>Replied on <?php echo timeAgo($comment['balasan_created_at']); ?></small>
                            </details>
                            <?php endif; ?>
                        </div>
                        <hr>
                        <?php endwhile; ?>
                    </div>
                </div>
                            </section>

  <!-- Comment Form -->
  <section class="py-5">
                        <div class="container px-4 px-lg-5">
                            <h2>Leave a Comment</h2>
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="comment" class="form-label">Comment</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-warning" name="submit_comment">Submit</button>
                            </form>
                        </div>
                    </section>

<?php
include 'footer.php';
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

