<?php
include "koneksidatabase.php";

$kd_skema = $_POST['kd_skema'];
$nm_peserta = $_POST['nm_peserta'];
$nik = $_POST['nik'];
$jenkel= $_POST['jenkel'];
$alamat= $_POST['alamat'];
$no_hp= $_POST['no_hp'];





$query = "INSERT INTO peserta (kd_skema,nm_peserta,nik,jenkel,alamat,no_hp) VALUES ('$kd_skema', '$nm_peserta','$nik','$jenkel','$alamat','$no_hp')";

$eksekusi = mysqli_query($db, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='peserta.php';
          </script>";
} else {
    echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='tambahpeserta.php';
          </script>";
}

mysqli_close($db);
?>
