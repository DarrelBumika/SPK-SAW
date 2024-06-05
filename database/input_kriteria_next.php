<?php
    include "./koneksi.php";

    $data_kriteria = mysqli_query($koneksi, "SELECT * FROM kriteria");
    $data_bobot = mysqli_query($koneksi, "SELECT SUM(bobot_kriteria) AS total_bobot FROM kriteria");

    if(mysqli_num_rows($data_kriteria) != 0 && mysqli_fetch_array($data_bobot)['total_bobot'] == 1) {
        header("Location: ../input_data_alternatif.php");
    } else {
        header("Location: ../input_data_kriteria.php");
    }
?>