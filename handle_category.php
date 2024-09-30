<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai kategori dari POST
    $category = $_POST['category'];

    // Cek kategori dan arahkan ke halaman yang sesuai
    switch ($category) {
        case 'casing':
            header("Location: casingby_category.php");
            break;
        case 'accsesoris':
            header("Location: accsesorisby_category.php");
            break;
        case 'bucket':
            header("Location: bucketpage_category.php");
            break;
        default:
            header("Location: index.php"); // Arahkan ke halaman utama jika kategori tidak ditemukan
            break;
    }
    exit();
}
?>
