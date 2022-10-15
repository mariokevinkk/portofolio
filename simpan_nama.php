<?php
require "koneksi.php";
$nama = $_POST["nama"];
$pesan = $_POST["pesan"];
$sql= "INSERT INTO form_nama(nama,pesan) VALUE('$nama','$pesan')";
$result = mysqli_query($conn,$sql);



?>
<!DOCTYPE html>
<html>
    <head>
        <title>FORM BERHASIL DI KIRIM</title> 
    </head>     
    <body>
        <p>Terimakasih</p>
        <a href="index.php">Kembali</a>
    </body>

</html>