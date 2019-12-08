    <!-- <?php 
$mysqli = mysqli_connect('localhost', 'root', '', 'websekolah');
$id = $_GET['id'];

$qr = mysqli_query($mysqli, "DELETE FROM program_studi WHERE id = '$id'");

if ($qr){
    header('Location: ../table2.php?ok');
} else {
    echo "<script type='text/javascript'>alert('Delete Gagal!');</script>";
    // echo mysqli_error($query); 
    echo "<script type='text/javascript'>location='table2.php#';</script>";
}

// echo "<script type='text/javascript'>alert('Data Terhapus!');</script>";
// echo "<script type='text/javascript'>location='../table.php?ok';</script>";
?>  -->