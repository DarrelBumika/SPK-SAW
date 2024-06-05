<?php
    include "./koneksi.php";

    $id_kriteria = $_GET['id_kriteria'];
    mysqli_query($koneksi, "DELETE FROM kriteria WHERE id_kriteria='$id_kriteria'") or die(mysqli_error($koneksi));
    header("location: ../input_data_kriteria.php");
?>