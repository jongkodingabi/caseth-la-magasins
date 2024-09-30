<?php
// Tampilkan pesan untuk debug
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
include 'connect.php'; // Koneksi ke database

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Periksa jika parameter pencarian ada di URL
if (isset($_GET['search_query']) && !empty(trim($_GET['search_query']))) {
    // Bersihkan input dari user
    $search_query = trim($_GET['search_query']);
    $search_query = "%{$search_query}%";

    // Buat query dengan prepared statement
    $stmt = $conn->prepare("SELECT * FROM tblproduct WHERE category LIKE ? OR name LIKE ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("ss", $search_query, $search_query);

    // Eksekusi query
    if (!$stmt->execute()) {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    }

    $result = $stmt->get_result();
    
    // Tampilkan hasil
    if ($result->num_rows > 0) {
        echo '<center><div class="container"><div class="row row-cols-1 row-cols-md-3 g-4">';

        while ($row = $result->fetch_assoc()) {
            ?>
           <div class="col">
                <div class="card h-100 position-relative">
                    <a href="singleproduct.php?id=<?php echo htmlspecialchars($row['id']); ?>">
                        <img src="../admin-pkwu/template/images/<?php echo htmlspecialchars($row['picture']); ?>" class="img-fluid rounded-4" alt="image"
                             style="width: 345px; height: 330px; padding: 10px;">
                    </a>
                    <div class="card-body p-0">
                        <a href="singleproduct.php?id=<?php echo htmlspecialchars($row['id']); ?>">
                            <h3 class="card-title pt-4 m-0"><?php echo htmlspecialchars($row['name']); ?></h3>
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
                            <h3 class="secondary-font text-primary"><?php echo htmlspecialchars($row['price']); ?></h3>
                            <div class="d-flex flex-wrap mt-3">
                                <a href="singleproduct.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn-cart me-3 px-4 pt-3 pb-3">
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

        echo '</div></div></center>';
    } else {
        echo "<p>No products found.</p>";
    }
} elseif (isset($_GET['category'])) {
    $category = trim($_GET['category']);
    $category = "%{$category}%";

    // Buat query dengan prepared statement
    $stmt = $conn->prepare("SELECT * FROM tblproduct WHERE category LIKE ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("s", $category);

    // Eksekusi query
    if (!$stmt->execute()) {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    }

    $result = $stmt->get_result();

    // Tampilkan hasil
            include "navbar.php";
            
    if ($result->num_rows > 0) {
        echo '<div class="container"><div class="row row-cols-1 row-cols-md-3 g-4">';

        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col">
                <div class="card h-100 position-relative">
                    <a href="singleproduct.php?id=<?php echo htmlspecialchars($row['id']); ?>">
                        <img src="../admin-pkwu/template/images/<?php echo htmlspecialchars($row['picture']); ?>" class="img-fluid rounded-4" alt="image"
                             style="width: 345px; height: 330px; padding: 10px;">
                    </a>
                    <div class="card-body p-0">
                        <a href="singleproduct.php?id=<?php echo htmlspecialchars($row['id']); ?>">
                            <h3 class="card-title pt-4 m-0"><?php echo htmlspecialchars($row['name']); ?></h3>
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
                            <h3 class="secondary-font text-primary"><?php echo htmlspecialchars($row['price']); ?></h3>
                            <div class="d-flex flex-wrap mt-3">
                                <a href="singleproduct.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn-cart me-3 px-4 pt-3 pb-3">
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

        echo '</div></div>';
    } else {
        echo "<p>No products found.</p>";
    }
} else {
    echo "<p>Error: No search query or category specified.</p>";
}

include 'footer.php';
?>


