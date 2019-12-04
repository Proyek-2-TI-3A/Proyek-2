<?php
include_once ('../db_connection/konek.php');
if (isset($_POST['TAMBAH'])){
	$nama_kampus = $_POST['nama_kampus'];
	$deskripsi_singkat = $_POST['deskripsi_singkat'];
	$deskripsi = $_POST['deskripsi'];
	$sql = "INSERT INTO kampus ('nama_kampus','deskripsi','deskripsi_singkat') VALUES ('','$nama_kampus', '$deskripsi', '$deskripsi_singkat')";
	$query = mysqli_query($mysqli, $sql);

	if ($query){
		header('Location: ../table.php?ok');
	} else {
        echo "<script type='text/javascript'>alert('Input Gagal!');</script>";
        echo "<script type='text/javascript'>location='../table.php#';</script>";
	}
} else {
	die("Akses Dilarang!");
}
?>