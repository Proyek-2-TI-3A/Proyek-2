<?php
include ("db_connection/konek.php");
if (isset($_POST['tambah'])){
	// $id_peminjaman = $_POST['id_peminjaman'];
	$id= $_POST['id'];
	$nama_kampus = $_POST['nama_kampus'];
	$deskripsi_singkat = $_POST['deskripsi_singkat'];
	$deskripsi = $_POST['deskripsi'];

	$sql = "INSERT INTO kampus VALUES 
	('$id','$nama_kampus', '$deskripsi_singkat', '$deskripsi')";
	$query = mysqli_query($mysqli, $sql);

	if ($query){
		header('Location: ../table.php?ok');
	} else {
		header('Location: ../table.php?-');
	}
} else {
	die("Akses Dilarang!");
}
?>