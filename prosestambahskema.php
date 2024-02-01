<?php
include "koneksidatabase.php";

$kd_skema = $_POST['kd_skema'];
$nm_skema = $_POST['nm_skema'];
$jenis = $_POST['jenis'];
$jml_unit = $_POST['jml_unit'];




$query = "INSERT INTO skema (kd_skema,nm_skema, jenis, jml_unit) VALUES ('$kd_skema','$nm_skema', '$jenis','$jml_unit')";

$eksekusi = mysqli_query($db, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='sertifikasi.php';
          </script>";
} else {
    echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='tambahskema.php';
          </script>";
}

mysqli_close($db);
?>
