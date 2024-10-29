<?php
$server = "localhost:3306";
$user = "root";
$pass = "";
$namaDB = "portfolio";
$port = 3306;
/*
// Buat koneksi
$koneksi = mysqli_connect($server, $user, $pass, $namaDB, $port); //Hasil koneksi = 1 (koneksi berhasil) atau 0 (koneksi gagal)

// Cek koneksi
if (!$koneksi) {
  die("Koneksi gagal" . mysqli_connect_error());
}

$sql = "INSERT INTO biodata (namadepan, namabelakang, pass)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    // Buat koneksi
    $conn = mysqli_connect($server, $user, $pass, $namaDB, $port); //Hasil koneksi = 1 (koneksi berhasil) atau 0 (koneksi gagal) 
} catch(mysqli_sql_exception $error){
    // Jika ada kesalahan koneksi
    echo "Connection fail: ".$error->getMessage();
}
?>
