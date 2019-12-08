<?php
    include ('../db_connection/konek.php');
    if (isset($_POST['SUBMIT'])){
        $nama_program_studi = $_POST['nama_program_studi'];
        $tingkat = $_POST['tingkat'];                          
        $sql = "INSERT INTO `program_studi` (`id`, `nama_program_studi`, `tingkat`) VALUES (NULL, '$nama_program_studi', '$tingkat');";
        $query = mysqli_query($con, $sql);
        // var_dump($query);
        // die;
        if ($query){
            header('Location: ../table2.php?ok');
        } else {
            echo "<script type='text/javascript'>alert('Input Gagal!');</script>";
            // echo mysqli_error($query); 
            echo "<script type='text/javascript'>location='table2.php#';</script>";
        }
    }
?>