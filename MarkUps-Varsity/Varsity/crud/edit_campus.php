<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<?php
				require_once '../db_connection/konek.php';
				$id = isset($_GET['id']) ? $_GET['id'] : '';
				// $id = $_GET['id'];
                $query = mysqli_query($con, "SELECT * FROM kampus WHERE id = '$id'");
                while($hasil  = mysqli_fetch_assoc($query)) {
            ?>
			<form class="contact100-form validate-form" method="POST" action="edit_proses.php">
				<span class="contact100-form-title">
					Form Edit Kampus
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Campus Name">
					<span class="label-input100">Nama Kampus *</span>
					<input class="input100" type="text" name="nama_kampus" value="<?php echo $hasil['nama_kampus']?>">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Please Type Description">
					<span class="label-input100">Deskripsi Singkat *</span>
					<input class="input100" type="text" name="deskripsi_singkat" value="<?php echo $hasil['deskripsi_singkat']?>">
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Description">
					<span class="label-input100">Deskripsi</span>
					<textarea class="input100" name="deskripsi" value="<?php echo $hasil['deskripsi']?>"></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type=submit name="SUBMIT">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
			<?php } ?>
		</div>
	</div>


</body>
</html>
