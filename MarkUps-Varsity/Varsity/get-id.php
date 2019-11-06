<?php 
    $mysqli = mysqli_connect('localhost', 'root', '', 'websekolah');
    $get_id = $_GET['id'];
    mysqli_query($mysqli, "SELECT * FROM Kampus WHERE id = '$get_id'")or die(mysql_error());
    // echo "<script type='text/javascript'>location='course-detail.php';</script>";
?>