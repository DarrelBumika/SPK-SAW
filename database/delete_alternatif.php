<?php
    include "./koneksi.php";

    $id_alternatif = $_GET['id_alternatif'];
    mysqli_query($koneksi, "DELETE FROM alternatif WHERE id_alternatif='$id_alternatif'") or die(mysqli_error($koneksi));
    header("location: ../input_data_alternatif.php");
?>