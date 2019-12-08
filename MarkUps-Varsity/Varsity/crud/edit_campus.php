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

<!-- Bootstrap core CSS     -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<!-- Animation library for notifications   -->
<link href="assets/css/animate.min.css" rel="stylesheet"/>

<!--  Light Bootstrap Table core CSS    -->
<link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="assets/css/demo.css" rel="stylesheet" />


<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
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
			<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

			<div class="container">
			<h2>Horizontal form</h2>
			<form class="form-horizontal" action="edit_proses.php" method="POST">
			<div class="form-group">
				<label class="control-label col-sm-2" for="id">ID:</label>
				<div class="col-sm-1">          
					<input type="text" class="form-control" id="id" name="id" value="<?php echo $hasil['id'];?>" disabled>
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-2" for="nama_kampus">Nama Kampus:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="nama_kampus" placeholder="Masukkan Nama Kampus" name="nama_kampus" value="<?php echo $hasil['nama_kampus'];?>">
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-2" for="deskripsi_singkat">Deskripsi Singkat:</label>
				<div class="col-sm-7">          
					<input type="text" class="form-control" id="deskripsi_singkat" placeholder="Masukkan Deskripsi Singkat" name="deskripsi_singkat" value="<?php echo $hasil['deskripsi_singkat'];?>">
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-2" for="deskripsi">Deskripsi:</label>
				<div class="col-sm-7">          
					<textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
				</div>
				</div>
				<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" value="SUBMIT" name="SUBMIT">
                    <input type="reset">
				</div>
				</div>
			</form>
			</div>
			<?php } ?>
		</div>
	</div>


</body>
</html>
