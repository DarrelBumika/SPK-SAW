<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPK - SAW</title>
    <link rel="stylesheet" href="./src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php
    include "./database/koneksi.php";
?>
<div class="w-full h-full flex justify-center items-center pt-20 pb-10">
    <div class="w-[1200px] h-auto flex flex-col gap-10 items-center">
        
        <div class="w-full h-auto flex flex-col gap-10 items-center sticky">
            <p class="font-poppins font-semibold text-[27px] text-black text-center">Menampilkan Hasil Perhitungan</p>
            <div class="w-full h-10 flex gap-3">
                <div class="w-[1108px] h-full bg-primary-surface rounded-[20px] flex items-center px-6">
                    <p href="" class="font-poppins font-normal text-sm text-primary-main">
                        <a href="./index.php">Home</a>
                        <span class="font-poppins font-normal text-sm text-black">/</span>
                        <a href="./sequence.php">Langkah</a>
                        <span class="font-poppins font-normal text-sm text-black">/</span>
                        <a href="" class="text-black">Menampilkan Hasil Perhitungan</a>
                    </p>
                </div>
                <div class="w-20 h-full flex items-center justify-center bg-primary-main rounded-[20px] font-poppins font-semibold text-base text-white">3 / 3</div>
            </div>
        </div>

        <div class="w-full h-auto flex flex-col gap-10">

            <!-- tabel 1 -->
            <div class="w-auto h-auto flex flex-col gap-7 pt-5">
                <p class="w-auto font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 3.</span> Menampilkan Hasil Perhitungan Kriteria</p>
                
                <div class="w-full flex justify-center items-center">
                    <div class="w-fit self-center h-auto flex flex-col rounded-[20px] overflow-hidden border border-primary-border">
                        <div class="w-auto h-[75px] flex bg-primary-main">
                            <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">No.</div>
                                <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Alternatif</div>
                                <div class="w-auto h-full flex flex-col">
                                <div class="w-auto h-[38px] font-poppins font-semibold text-base text-white flex justify-center items-center">Kode Kriteria</div>
                                    <div class="w-auto h-[37px] flex border-t border-primary-border bg-primary-hover">
                                        <?php 
                                            $data_kriteria = mysqli_query($koneksi,"SELECT * FROM kriteria");
                                            while($kriteria = mysqli_fetch_array($data_kriteria)) {
                                        ?>
                                        <div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center"><?php echo $kriteria['kode_kriteria']?></div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        <div class="w-auto h-auto flex flex-col">
                            <?php 
                                $data_alternatif = mysqli_query($koneksi,"SELECT * FROM alternatif");
                                $i = 0;
                                while ($alternatif = mysqli_fetch_array($data_alternatif)) {
                                    $color = ($i % 2 == 0) ? 'white' : 'primary-surface';
                                    $nama_alternatif = $alternatif['nama_alternatif'];
                                    $i++;
                            ?>
                            <div class="w-auto h-full flex border-t border-primary-border bg-<?php echo $color?>">
                                <div class="w-[60px] h-auto border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center bg-<?php echo $color?>"><?php echo $i?></div>
                                <div class="w-[285px] h-auto border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center bg-<?php echo $color?>"><?php echo $nama_alternatif?></div>
                                <div class="w-auto h-[37px] flex">
                                    <?php
                                        $data_alternatif_kriteria = mysqli_query($koneksi,"SELECT * FROM alternatif a JOIN alternatif_kriteria ak ON a.id_alternatif = ak.id_alternatif WHERE a.nama_alternatif = '". $nama_alternatif ."'");
                                        while ($alternatif_kriteria = mysqli_fetch_array($data_alternatif_kriteria)) { 
                                    ?>
                                    <div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center"><?php echo $alternatif_kriteria['data']?></div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <?php
                                }
                            ?>     
                        </div>
                        <div class="w-auto h-[37px] flex bg-primary-hover border-t border-primary-border">
                            <div class="w-[345px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Min/Max</div>
                            <div class="w-auto h-full flex flex-col">
                                <div class="h-[37px] flex">
                                    <?php 
                                        $data_minmax = mysqli_query($koneksi,'SELECT * FROM min_max');
                                        while ($minmax = mysqli_fetch_array($data_minmax)) {
                                    ?>
                                    <div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center"><?php echo $minmax['min_max']?></div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- tabel 2 -->
            <div class="w-auto h-auto flex flex-col gap-7 pt-5 border-t-2">
                <p class="w-auto font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 4.</span> Menampilkan Hasil Perhitungan Normalisasi</p>
                
                <div class="w-full flex justify-center items-center">
                    <div class="w-auto h-auto flex flex-col rounded-[20px] overflow-hidden border border-primary-border">
                        <div class="w-auto h-[75px] flex bg-primary-main">
                            <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">No.</div>
                                <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Alternatif</div>
                                <div class="w-auto h-full flex flex-col">
                                <div class="w-auto h-[38px] font-poppins font-semibold text-base text-white flex justify-center items-center">Kode Kriteria</div>
                                    <div class="w-auto h-[37px] flex border-t border-primary-border bg-primary-hover">
                                        <?php 
                                            $data_kriteria = mysqli_query($koneksi,"SELECT * FROM kriteria");
                                            while($kriteria = mysqli_fetch_array($data_kriteria)) {
                                        ?>
                                        <div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center"><?php echo $kriteria['kode_kriteria']?></div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        <div class="w-auto h-auto flex flex-col">
                            <?php 
                                $data_alternatif = mysqli_query($koneksi,"SELECT * FROM alternatif");
                                $i = 0;
                                while ($alternatif = mysqli_fetch_array($data_alternatif)) {
                                    $color = ($i % 2 == 0) ? 'white' : 'primary-surface';
                                    $nama_alternatif = $alternatif['nama_alternatif'];
                                    $i++;
                            ?>
                            <div class="w-auto h-full flex border-t border-primary-border bg-<?php echo $color?>">
                                <div class="w-[60px] h-auto border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center bg-<?php echo $color?>"><?php echo $i?></div>                                
                                <div class="w-[285px] h-auto border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center bg-<?php echo $color?>"><?php echo $nama_alternatif?></div>
                                <div class="w-auto h-[37px] flex">
                                    <?php
                                        $data_normalisasi = mysqli_query($koneksi,"SELECT * FROM alternatif a JOIN normalisasi n ON a.id_alternatif = n.id_alternatif WHERE a.nama_alternatif = '". $nama_alternatif ."'");
                                        while ($normalisasi = mysqli_fetch_array($data_normalisasi)) { 
                                    ?>
                                    <div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center"><?php echo $normalisasi['data_normal']?></div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <?php
                                }
                            ?>     
                        </div>
                        <div class="w-auto h-[37px] flex bg-primary-hover border-t border-primary-border">
                            <div class="w-[345px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Bobot</div>
                            <div class="w-auto h-full flex flex-col">
                                <div class="h-[37px] flex">
                                    <?php 
                                        $data_kriteria = mysqli_query($koneksi,'SELECT * FROM kriteria');
                                        while ($kriteria = mysqli_fetch_array($data_kriteria)) {
                                    ?>
                                    <div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center"><?php echo $kriteria['bobot_kriteria'] * 100?></div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="w-auto h-[37px] flex bg-primary-hover border-t border-primary-border">
                            <div class="w-[345px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Hasil Bobot</div>
                            <div class="w-auto h-full flex flex-col">
                                <div class="h-[37px] flex">
                                    <?php 
                                        $data_kriteria = mysqli_query($koneksi,'SELECT * FROM kriteria');
                                        while ($kriteria = mysqli_fetch_array($data_kriteria)) {
                                    ?>
                                    <div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center"><?php echo $kriteria['bobot_kriteria']?></div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- tabel 3 -->
            <div class="w-auto h-auto flex flex-col gap-7 pt-5 border-t-2">
                <p class="w-auto font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 4.</span> Menampilkan Hasil Perhitungan Normalisasi</p>
                
                <div class="w-full flex justify-center items-center">
                    <div class="w-auto h-auto flex flex-col rounded-[20px] overflow-hidden border border-primary-border">
                        <div class="w-auto h-[75px] flex bg-primary-main">
                            <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">No.</div>
                            <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Alternatif</div>
                            <div class="w-auto h-full flex flex-col">
                                    <div class="w-auto h-[38px] font-poppins font-semibold text-base text-white flex justify-center items-center  border-r border-primary-border">Kode Kriteria</div>
                                    <div class="w-auto h-[37px] flex border-t border-primary-border bg-primary-hover">
                                        <?php 
                                            $data_kriteria = mysqli_query($koneksi,"SELECT * FROM kriteria");
                                            while($kriteria = mysqli_fetch_array($data_kriteria)) {
                                        ?>
                                        <div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center"><?php echo $kriteria['kode_kriteria']?></div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                            </div>
                            <div class="w-[100px] h-full  flex justify-center items-center">
                                <p class="font-poppins font-semibold text-base text-white">Jumlah</p>
                            </div>
                        </div>
                        <div class="w-auto h-auto flex flex-col">
                            <?php 
                                $data_alternatif = mysqli_query($koneksi,"SELECT * FROM alternatif");
                                $i = 0;
                                while ($alternatif = mysqli_fetch_array($data_alternatif)) {
                                    $color = ($i % 2 == 0) ? 'white' : 'primary-surface';
                                    $nama_alternatif = $alternatif['nama_alternatif'];
                                    $i++;
                            ?>
                            <div class="w-auto h-full flex border-t border-primary-border bg-<?php echo $color?>">
                                <div class="w-[60px] h-auto border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center bg-<?php echo $color?>"><?php echo $i?></div>                                
                                <div class="w-[285px] h-auto border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center bg-<?php echo $color?>"><?php echo $nama_alternatif?></div>
                                <div class="w-auto h-[37px] flex">
                                    <?php
                                        $data_hasil_akhir = mysqli_query($koneksi,"SELECT * FROM alternatif a JOIN hasil_akhir ha ON a.id_alternatif = ha.id_alternatif WHERE a.nama_alternatif = '". $nama_alternatif ."'");
                                        while ($hasil_akhir = mysqli_fetch_array($data_hasil_akhir)) { 
                                    ?>
                                    <div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center"><?php echo $hasil_akhir['hasil_normalisasi']?></div>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="w-[100px] h-auto border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center bg-<?php echo $color?>">
                                    <?php
                                        $data_ranking = mysqli_query($koneksi,"SELECT * FROM alternatif a JOIN ranking r ON a.id_alternatif = r.id_alternatif WHERE a.nama_alternatif='". $nama_alternatif ."'");
                                        echo mysqli_fetch_array($data_ranking)['jumlah'];
                                    ?>
                                </div>
                            </div>
                            <?php
                                }
                            ?>     
                        </div>
                    </div>
                </div>

            </div>

            <div class="w-auto h-auto flex flex-col gap-7 pt-5 border-t-2">
                <p class="w-auto font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 5.</span> Menampilkan Hasil Perhitungan Ranking</p>
                
                <div class="w-full flex justify-center items-center">
                    <div class="w-auto h-auto flex flex-col rounded-[20px] overflow-hidden border border-primary-border">
                        <div class="w-auto h-[37px] flex bg-primary-main">
                            <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">No.</div>
                            <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Alternatif</div>
                            <div class="w-[155px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Rangking</div>
                        </div>
                        <div class="w-auto h-auto flex flex-col">
                            <?php 
                                $data_ranking = mysqli_query($koneksi, "SELECT * FROM alternatif a JOIN ranking r ON a.id_alternatif = r.id_alternatif");
                                $i = 0;
                                while ($ranking = mysqli_fetch_array($data_ranking)) {
                                    $color = ($i % 2 == 0) ? 'white' : 'primary-surface';
                                    $i++;
                            ?>
                                        <div class="w-auto h-[37px] flex border-t border-primary-border bg-<?php echo $color?>">
                                            <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center"><?php echo $i?></div>
                                            <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center"><?php echo $ranking['nama_alternatif']?></div>
                                            <div class="w-[155px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center"><?php echo $ranking['rank_no']?></div>
                                        </div>
                            <?php
                                }
                            ?>     
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="w-full flex gap-4 pt-5 border-t-2 justify-end">
            <a class="w-auto h-full bg-primary-border rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./index.php">
                <img src="./src/images/home.svg" alt="">
            </a>
            <a class="w-auto h-[40px] flex items-center hover:cursor-pointer px-10 bg-primary-surface rounded-full font-poppins font-normal text-sm text-black" href="./input_data_alternatif.php">Kembali</a>
            <a class="w-auto h-[40px] flex items-center hover:cursor-pointer px-10 bg-primary-main rounded-full font-poppins font-normal text-sm text-white" href="./hasil_akhir.php">Selesai</a>
        </div>
        
    </div>
</div>
</body>
</html>