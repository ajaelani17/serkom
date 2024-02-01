<?php
include "koneksidatabase.php";
$id =$_POST['id'];
$nm_skema= $_POST['nm_skema'];
$jenis = $_POST['jenis'];
$jml_unit = $_POST['jml_unit'];





$query = "UPDATE skema set nm_skema='$nm_skema',
                                
                                jenis = '$jenis',
                                jml_unit = '$jml_unit'
                                
                                
                                WHERE id = '$id'";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='sertifikasi.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editskema.php';

</script>";
}



?>