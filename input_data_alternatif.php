<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPK - SAW</title>
    <link rel="stylesheet" href="./src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<body>
    <?php
        include "./database/koneksi.php";
    ?>
    <div class="w-full h-full flex justify-center items-center pt-20 pb-10">

        <div class="w-[1200px] h-auto flex flex-col gap-10 items-center">
            <div class="w-full h-auto flex flex-col gap-10 items-center sticky">
                <p class="font-poppins font-semibold text-[27px] text-black text-center">Memasukkan Jumlah Alternatif</p>
                <div class="w-auto h-10 flex gap-3">
                    <div class="w-[1108px] h-full bg-primary-surface rounded-[20px] flex items-center px-6">
                        <p href="" class="font-poppins font-normal text-sm text-primary-main">
                            <a href="./sequence.php">Home</a>
                            <span class="font-poppins font-normal text-sm text-black">/</span>
                            <a href="./sequence.php">Langkah</a>
                            <span class="font-poppins font-normal text-sm text-black">/</span>
                            <a href="" class="text-black">Memasukkan Jumlah Alternatif</a>
                        </p>
                    </div>
                    <div class="w-20 h-full flex items-center justify-center bg-primary-main rounded-[20px] font-poppins font-semibold text-base text-white">2 / 3</div>
                </div>
            </div>

            <div class="w-full h-auto flex flex-col">
                <p class="w-full border-b-2 py-5 font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 2.</span> Memasukkan Jumlah Alternatif</p>
                <div class="flex flex-col justify-center items-center border-b-2 py-5 gap-5">
                    <form class="w-fit flex gap-5" action="./database/insert_alternatif.php">
                        <div class="w-fit flex flex-col gap-3">
                            <div class="flex gap-5 justify-end">
                                <?php 
                                    $data_kriteria = mysqli_query($koneksi,"SELECT * FROM kriteria");
                                    while ($kriteria = mysqli_fetch_array($data_kriteria)) {
                                ?>
                                <div class="w-20 flex justify-center font-poppins fonr"><?php echo $kriteria['kode_kriteria']?></div>
                                <?php
                                    }
                                ?>
                            </div>

                            <div class="flex flex-col gap-5" id="input_form">
                                <div class="flex gap-5 items-center">
                                    <div class="flex items-center gap-5">
                                        <p class="w-auto h-6 font-poppins font-normal text-base text-black">Masukkan Alternatif</p>
                                        <input required name="nama_alternatif" type="text" class="w-[220px] h-10 px-3 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                                    </div>
                                    <?php 
                                        $data_kriteria = mysqli_query($koneksi,"SELECT * FROM kriteria");
                                        while ($kriteria = mysqli_fetch_array($data_kriteria)) {
                                    ?>
                                    <div class="flex items-center gap-5">
                                        <input required name="nilai_<?php echo $kriteria['id_kriteria']?>" type="text" class="w-20 h-10 px-3 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-end">
                            <input type="submit" value="Add" class="h-10 w-20 flex justify-center hover:cursor-pointer rounded-[20px] bg-primary-main font-poppins font-semibold text-white">
                        </div>
                    </form>
                </div>

                <div class="w-full border-b-2 py-5 flex justify-center items-center gap-5">
                    <div class="w-fit h-auto flex flex-col rounded-[20px] overflow-hidden border border-primary-border">
                        <div class="w-auto h-[75px] flex bg-primary-main">
                            <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">No.</div>
                            <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Alternatif</div>
                            <div class="w-auto h-full flex flex-col">
                                <div class="w-auto h-[38px] font-poppins font-semibold text-base text-white flex justify-center items-center border-r border-primary-border">Kode Kriteria</div>
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
                            <div class="w-[100px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Option</div>
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
                                <a class="w-[100px] h-[37px] flex justify-center items-center border-r border-primary-border font-poppins font-semibold text-base cursor-pointer text-white bg-red-500" href="./database/delete_alternatif.php?id_alternatif=<?php echo $alternatif['id_alternatif']?>"> X </a>
                            </div>
                            <?php
                                }
                            ?>     
                        </div>
                    </div>
                </div>

                <div class="w-full h-20 flex justify-end py-5 gap-5">
                    <a class="w-[100px] h-full bg-primary-surface rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./input_data_kriteria.php">
                        <p class="font-poppins text-base font-normal">Kembali</p>
                    </a>
                    <form action="./database/input_alternatif_next.php" class="font-poppins text-base text-white font-normal">
                    <input type="submit" class="w-[100px] h-full bg-primary-main rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./hasil_perhitungan.php" value="Lanjut">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>