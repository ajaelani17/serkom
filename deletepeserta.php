<?php
include "koneksidatabase.php";

$id = $_GET['id'];


$query = "DELETE FROM peserta WHERE id = $id";
$eksekusi = mysqli_query($db, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='peserta.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='peserta.php';

</script>";
}
