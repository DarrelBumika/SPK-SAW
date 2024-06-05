<?php
    include "./koneksi.php";

    $data_kriteria = mysqli_query($koneksi, "SELECT * FROM alternatif");
    if(mysqli_num_rows($data_kriteria) != 0) {
        header("Location: ../hasil_perhitungan.php");
    } else {
        header("Location: ../input_data_alternatif.php");
    }
?>