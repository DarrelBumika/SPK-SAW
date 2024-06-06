<?php
    include "./koneksi.php";

    $allowed = true;

    $nama_kriteria = $_GET['nama_kriteria'];
    $kode_kriteria = $_GET['kode_kriteria'];
    $costOrBenefit = $_GET['costOrBenefit'];
    $nilai_bobot = $_GET['nilai_bobot'];

    $datas =  mysqli_query($koneksi, "SELECT nama_kriteria, kode_kriteria from kriteria");
    if ($datas->num_rows == 10) {
        $allowed = false;
    }
    while($data = mysqli_fetch_array($datas)) {
        if($data['nama_kriteria'] == $nama_kriteria || $data['kode_kriteria'] == $kode_kriteria) {
            $allowed = false;
        }
    }

    if($allowed) {
        mysqli_query($koneksi, "INSERT INTO kriteria (nama_kriteria, kode_kriteria, cost_benefit, bobot_kriteria) VALUE ('$nama_kriteria', '$kode_kriteria', '$costOrBenefit', '$nilai_bobot')");
        header("location: ../input_data_kriteria.php??insert_status=succeed");
    } else {
        header("location: ../input_data_kriteria.php??insert_status=failed");
    }
?>