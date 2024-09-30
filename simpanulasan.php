<?php
    include "connect.php";
    ?>
<?php
// Proses data formulir di sini
// Memeriksa apakah data diterima dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari formulir
    $email = $_POST["email"];
    $nama = $_POST["nama"];
    $ulasan = $_POST["ulasan"];
    // Validasi data jika diperlukan
    
    // Menyimpan data ke dalam tabel database
    $sql = "INSERT INTO tblulasan (email, nama, ulasan) VALUES ('$email', '$nama', '$ulasan')";
    
    if (mysqli_query($conn, $sql)) {
       // Data berhasil disimpan, mengirim respons JSON ke JavaScript
       $response = array("success" => true);
       echo json_encode($response);
   } else {
       // Gagal menyimpan data, mengirim pesan error ke JavaScript
       $response = array("success" => false, "message" => "Error: " . $sql . "<br>" . mysqli_error($conn));
       echo json_encode($response);
   }
   
   // Menutup koneksi ke database
   mysqli_close($conn);
}
?>