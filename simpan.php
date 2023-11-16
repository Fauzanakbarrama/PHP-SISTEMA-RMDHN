<?php
include 'koneksi.php';
$id_wali = $_POST['id_wali'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO mahasiswa SET nim = '$nim',nama = '$nama',jurusan = '$jurusan',jenis_kelamin = '$jenis_kelamin',alamat = '$alamat', id_wali = '$id_wali'";
mysqli_query($koneksi, $query);
header("location:index-admin.php");
?>