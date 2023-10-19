<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id     = $_POST['id'];
$plat_nomor         = $_POST['plat_nomor'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_parkir SET plat_nomor = '$plat_nomor', jenis_kendaraan = '$jenis_kendaraan' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>