<?php
    include "./koneksi.php";

    mysqli_query($koneksi, "DELETE FROM alternatif_kriteria");
    mysqli_query($koneksi, "DELETE FROM kriteria");
    mysqli_query($koneksi, "DELETE FROM alternatif");

    mysqli_query($koneksi, "ALTER TABLE kriteria AUTO_INCREMENT = 0");
    mysqli_query($koneksi, "ALTER TABLE alternatif AUTO_INCREMENT = 0");

    header("location: ../index.php");
?>