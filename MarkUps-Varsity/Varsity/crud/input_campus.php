<?php
    include ('../db_connection/konek.php');
    if (isset($_POST['SUBMIT'])){
        $nama_kampus = $_POST['nama_kampus'];
        $deskripsi_singkat = $_POST['deskripsi_singkat'];
        $deskripsi = $_POST['deskripsi'];                           
        $sql = "INSERT INTO `kampus` (`id`, `nama_kampus`, `deskripsi`, `deskripsi_singkat`) VALUES (NULL, '$nama_kampus', '$deskripsi', '$deskripsi_singkat');";
        $query = mysqli_query($con, $sql);
        // var_dump($query);
        // die;
        if ($query){
            header('Location: ../table.php?ok');
        } else {
            echo "<script type='text/javascript'>alert('Input Gagal!');</script>";
            // echo mysqli_error($query); 
            echo "<script type='text/javascript'>location='table.php#';</script>";
        }
    }
?>