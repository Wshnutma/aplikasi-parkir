<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM tbl_parkir WHERE id = '$id'";

if($con->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>