<?php
    include "./koneksi.php";

    $ada = false;
    $nama_alternatif = $_GET['nama_alternatif'];

    $datas =  mysqli_query($koneksi, "SELECT nama_alternatif from alternatif");
    while($data = mysqli_fetch_array($datas)) {
        if($data['nama_alternatif'] == $nama_alternatif) {
            $ada = true;
        }
    }

    if(!$ada) {
        $data_kriteria = mysqli_query($koneksi,"SELECT * FROM kriteria");

        mysqli_query($koneksi, "INSERT INTO alternatif (nama_alternatif) VALUE ('$nama_alternatif')");
        
        $last_id = mysqli_insert_id($koneksi);

        while ($kriteria = mysqli_fetch_array($data_kriteria)) {
            $value = $_GET['nilai_'.$kriteria['id_kriteria']];

            mysqli_query($koneksi, "INSERT INTO alternatif_kriteria (id_alternatif, id_kriteria, data) VALUE (".$last_id.", ".$kriteria['id_kriteria'].", $value)");
        }

        header("location: ../input_data_alternatif.php");
    } else {
        header("location: ../input_data_alternatif.php");
    }
?>