<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO wali SET nama_wali = '$nama',jenis_kelamin = '$jenis_kelamin',alamat_wali = '$alamat'";
$result = mysqli_query($koneksi, $query);
$id_wali = $koneksi->insert_id;

header("location:form-input-mhs.php?q=$id_wali");
?>