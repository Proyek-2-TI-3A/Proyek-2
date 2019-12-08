<?php
				include ('../db_connection/konek.php');
				 if (isset($_POST['SUBMIT'])){
					// $id = isset($_GET['id']) ? $_GET['id'] : '';
					$id = $_POST['id'];
					$nama_kampus = $_POST['nama_kampus'];
					$deskripsi_singkat = $_POST['deskripsi_singkat'];
					$deskripsi = $_POST['deskripsi'];                           
					$sql = "UPDATE kampus SET nama_kampus = '$nama_kampus', deskripsi = '$deskripsi', deskripsi_singkat = '$deskripsi_singkat' WHERE kampus.id = '$id';";
					$query = mysqli_query($con, $sql);
					// var_dump($query);
					// die;
					if ($query){
						header('Location: ../table.php?ok');
					} else {
						echo "<script type='text/javascript'>alert('Edit Gagal!');</script>";
						// echo mysqli_error($query); 
						// echo "<script type='text/javascript'>location='edit_campus.php'</script>";
					}
				 }
			?>