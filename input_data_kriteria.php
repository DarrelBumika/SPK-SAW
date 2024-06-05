<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPK - SAW</title>
    <link rel="stylesheet" href="./src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="w-full h-full flex justify-center items-center pt-20 pb-10">
        <div class="w-[1200px] h-auto flex flex-col gap-10 items-center">
            <div class="w-full h-auto flex flex-col gap-10 items-center sticky">
                <p class="font-poppins font-semibold text-[27px] text-black text-center">Menentukan Kriteria</p>
                <div class="w-full h-10 flex gap-3">
                    <div class="w-[1108px] h-full bg-primary-surface rounded-[20px] flex items-center px-6">
                        <p href="" class="font-poppins font-normal text-sm text-primary-main">
                            <a href="./index.php">Home</a>
                            <span class="font-poppins font-normal text-sm text-black">/</span>
                            <a href="./sequence.php">Langkah</a>
                            <span class="font-poppins font-normal text-sm text-black">/</span>
                            <a href="" class="text-black">Memasukkan Jumlah Alternatif</a>
                        </p>
                    </div>
                    <div class="w-20 h-full flex items-center justify-center bg-primary-main rounded-[20px] font-poppins font-semibold text-base text-white">1 / 3</div>
                </div>
            </div>

            <div class="w-full h-auto flex flex-col">
                <p class="w-auto border-b-2 py-5 font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 1.</span> Masukkan Kriteria</p>
                <div class="h-auto border-b-2 py-5 flex flex-col gap-5">
                    <div class="h-auto flex flex-col gap-5">
                        <div class="h-auto flex gap-8 items-center">
                            <div class="flex items-center gap-5">
                                <p class="w-auto h-6 font-poppins font-normal text-base text-black">Masukkan Kriteria</p>
                                <input type="text" class="w-[220px] h-10 px-3 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                            </div>
                            <div class="flex items-center gap-5">
                                <p class="w-auto h-6 font-poppins font-normal text-base text-black">Nilai Kriteria</p>
                                <input type="text" class="w-20 h-10 px-3 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                            </div>
                            <div class="flex items-center gap-5">
                                <p class="w-auto h-6 font-poppins font-normal text-base text-black">Cost/Benefit</p>
                                <select name="costOrBenefit" id="costOrBenefit" class="w-25 h-10 hover:cursor-pointer px-3 border border-zinc-400 rounded-lg">
                                    <option value="1" class="font-poppins font-normal text-base text-black">Cost</option>
                                    <option value="2" class="font-poppins font-normal text-base text-black">Benefit</option>
                                </select>
                            </div>
                            <div class="flex items-center gap-5">
                                <p class="w-auto h-6 font-poppins font-normal text-base text-black">Nilai Bobot</p>
                                <input type="text" class="w-20 h-10 px-3 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                            </div>
                            <input type="submit" value="Add" class="h-10 w-20 flex justify-center hover:cursor-pointer rounded-[20px] bg-primary-main font-poppins font-semibold text-white">
                        </div>
                    </div>
                </div>

                <div class="w-auto h-auto flex justify-center items-center border-b-2 py-5">
                    <div class="w-fit h-auto flex flex-col rounded-[20px] overflow-hidden border border-primary-border">
                        <div class="w-auto h-[37px] flex bg-primary-main">
                            <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">No.</div>
                            <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Kriteria</div>
                            <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Bobot</div>
                            <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Cost/Benefit</div>
                        </div>
                        <div class="w-auto h-auto flex flex-col">
                            <?php 
                                include "./database/koneksi.php";
                                $datas = mysqli_query($koneksi, "SELECT * FROM kriteria");include "./database/koneksi.php";
                                $i = 0;
                                while ($kriteria = mysqli_fetch_array($datas)) {
                                    $color = ($i % 2 == 0) ? 'white' : 'primary-surface';
                                    $i++;
                            ?>
                            <div class="w-auto h-[37px] flex border-t border-primary-border bg-<?php echo $color?>">
                                <div class="w-[60px] h-full flex justify-center items-center border-r border-primary-border font-poppins font-normal text-base bg-<?php echo $color?>"><?php echo $i?></div>
                                <div class="w-[285px] h-full flex justify-center items-center border-r border-primary-border font-poppins font-normal text-base bg-<?php echo $color?>"><?php echo $kriteria['nama_kriteria']?></div>
                                <div class="w-[285px] h-full flex justify-center items-center border-r border-primary-border font-poppins font-normal text-base bg-<?php echo $color?>"><?php echo $kriteria['bobot_kriteria']?></div>
                                <div class="w-[285px] h-full flex justify-center items-center border-r border-primary-border font-poppins font-normal text-base bg-<?php echo $color?>"><?php echo $kriteria['cost_benefit'] == "C" ? "COST" : "BENEFIT"?></div>
                            </div>
                            <?php
                                }
                            ?>     
                        </div>
                    </div>
                </div>

                <div class="w-full h-20 flex justify-end py-5 gap-5">
                    <a class="w-auto h-full bg-primary-border rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./index.php">
                        <img src="./src/images/home.svg" alt="">
                    </a>
                    <a class="w-[100px] h-full bg-primary-surface rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./sequence.php">
                        <p class="font-poppins text-base font-normal">Kembali</p>
                    </a>
                    <a class="w-[100px] h-full bg-primary-main rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./input_data_alternatif.php">
                        <p class="font-poppins text-base text-white font-normal">Lanjut</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>