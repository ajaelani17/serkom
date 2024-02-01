<?php
include "koneksidatabase.php";
$id =$_POST['id'];
$kd_skema= $_POST['kd_skema'];
$nm_peserta = $_POST['nm_peserta'];
$nik = $_POST['nik'];
$jenkel = $_POST['jenkel'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];





$query = "UPDATE peserta set kd_skema='$kd_skema',
                                
                                nm_peserta = '$nm_peserta',
                                nik = '$nik',
                                jenkel= '$jenkel',
                                alamat= '$alamat',
                                no_hp= '$no_hp'
                                
                                
                                WHERE id = '$id'";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='peserta.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editmatkul.php';

</script>";
}



?>