<?php
    include "./koneksi.php";

    $ada = false;

    $nama_kriteria = $_GET['nama_kriteria'];
    $kode_kriteria = $_GET['kode_kriteria'];
    $costOrBenefit = $_GET['costOrBenefit'];
    $nilai_bobot = $_GET['nilai_bobot'];

    $datas =  mysqli_query($koneksi, "SELECT nama_kriteria, kode_kriteria from kriteria");
    while($data = mysqli_fetch_array($datas)) {
        if($data['nama_kriteria'] == $nama_kriteria && $data['kode_kriteria'] == $kode_kriteria) {
            $ada = true;
        }
    }

    if(!$ada) {
        mysqli_query($koneksi, "INSERT INTO kriteria (nama_kriteria, kode_kriteria, cost_benefit, bobot_kriteria) VALUE ('$nama_kriteria', '$kode_kriteria', '$costOrBenefit', '$nilai_bobot')");
        header("location: ../input_data_kriteria.php");
    } else {
        header("location: ../input_data_kriteria.php");
    }
?>