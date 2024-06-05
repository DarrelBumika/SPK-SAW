<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPK - SAW</title>
    <link rel="stylesheet" href="./src/output.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<body>
    <div class="w-full h-full flex justify-center items-center pt-20 pb-10">

        <div class="w-auto h-auto flex flex-col gap-10 items-center">
            <div class="w-auto h-auto flex flex-col gap-10 items-center sticky">
                <p class="font-poppins font-semibold text-[27px] text-black text-center">Memasukkan Jumlah Alternatif</p>
                <div class="w-auto h-10 flex gap-3">
                    <div class="w-[1046px] h-full bg-primary-surface rounded-[20px] flex items-center px-6">
                        <p href="" class="font-poppins font-normal text-sm text-primary-main">
                            <a href="./index.php">Home</a>
                            <span class="font-poppins font-normal text-sm text-black">/</span>
                            <a href="./sequence.php">Langkah</a>
                            <span class="font-poppins font-normal text-sm text-black">/</span>
                            <a href="" class="text-black">Memasukkan Jumlah Alternatif</a>
                        </p>
                    </div>
                    <div class="w-20 h-full flex items-center justify-center bg-primary-main rounded-[20px] font-poppins font-semibold text-base text-white">2 / 3</div>
                </div>
            </div>

            <div class="w-auto h-auto flex flex-col">
                <p class="w-full border-b-2 py-5 font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 3.</span> Memasukkan Jumlah Alternatif</p>
                <div class="border-b-2 py-5 flex flex-col gap-5">
                    <div class="h-4 flex justify-start items-center gap-5">
                        <p class="font-poppins font-normal text-black">Masukkan Jumlah Kriteria</p>
                        <div class="rounded-lg overflow-hidden border border-[#B8B8B8]">
                            <select name="options" id="options" class="w-full px-3 hover:cursor-pointer">
                                <?php
                                    for ($i = 1; $i <= 20; $i++) {
                                ?>
                                <option value="<?php echo $i?>" class="font-poppins"><?php echo $i?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5">
                        <div class="flex gap-5 justify-end">
                            <?php 
                                for ($i = 1; $i <= 10; $i++) {
                            ?>
                            <div class="w-20 flex justify-center font-poppins fonr">Kriteria <?php echo $i?></div>
                            <?php
                                }
                            ?>
                        </div>

                        <div class="flex flex-col gap-5" id="input_form">
                            <div class="flex gap-5 items-center">
                                <div class="flex items-center gap-5">
                                    <p class="w-auto h-6 font-poppins font-normal text-base text-black">Masukkan Alternatif</p>
                                    <input type="text" class="w-[220px] h-10 px-3 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                                </div>
                                <?php 
                                for ($i = 1; $i <= 10; $i++) {
                                ?>
                                <div class="flex items-center gap-5">
                                    <input type="text" class="w-20 h-10 px-3 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-20 flex justify-end py-5 gap-5">
                    <a class="w-auto h-full bg-primary-border rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./index.php">
                        <img src="./src/images/home.svg" alt="">
                    </a>
                    <a class="w-[100px] h-full bg-primary-surface rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./menampilkan-data-bobot-dan-kriteria.php">
                        <p class="font-poppins text-base font-normal">Kembali</p>
                    </a>
                    <a class="w-[100px] h-full bg-primary-main rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./hasil_perhitungan.php">
                        <p class="font-poppins text-base text-white font-normal">Lanjut</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
<script>
    $(function() {
        $('select').change(function() {
            $('#input_form').html('');
            for (var i = 0; i<parseInt($(this).val()); i++) {
                var row = '<div class="flex gap-5 items-center">\
                                <div class="flex items-center gap-5">\
                                    <p class="w-auto h-6 font-poppins font-normal text-base text-black">Masukkan Alternatif</p>\
                                    <input type="text" class="w-[220px] h-10 px-3 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">\
                                </div>\
                                <?php 
                                for ($i = 1; $i <= 10; $i++) {
                                ?>
                                <div class="flex items-center gap-5">\
                                    <input type="text" class="w-20 h-10 px-3 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">\
                                </div>\
                                <?php
                                    }
                                ?>
                            </div>';
                row = $(row);
                $('#input_form').append(row);
            }
        });
    });
</script>
</body>
</html>