<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPK - SAW</title>
    <link rel="stylesheet" href="../output.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<body>
    <div class="w-svw h-svh flex justify-center items-center relative">
        <div class="w-auto h-auto flex flex-col gap-10 items-center">
            <div class="w-auto h-auto flex flex-col gap-10 items-center sticky">
                <p class="font-poppins font-semibold text-[27px] text-black text-center">Menentukan Kriteria</p>
                <div class="w-auto h-10 flex gap-3">
                    <div class="w-[1046px] h-full bg-primary-surface rounded-[20px] flex items-center px-6">
                        <p href="" class="font-poppins font-normal text-sm text-primary-main">
                            <a href="../index.php">Home</a>
                            <span class="font-poppins font-normal text-sm text-black">/</span>
                            <a href="./sequence.php">Langkah</a>
                            <span class="font-poppins font-normal text-sm text-black">/</span>
                            <a href="" class="text-black">Memasukkan Jumlah Alternatif</a>
                        </p>
                    </div>
                    <div class="w-20 h-full flex items-center justify-center bg-primary-main rounded-[20px] font-poppins font-semibold text-base text-white">1 / 3</div>
                </div>
            </div>

            <div class="w-auto h-auto flex flex-col">
                <p class="w-full border-b-2 py-5 font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 1.</span> Masukkan Kriteria</p>
                <div class="border-b-2 py-5 flex flex-col gap-5">
                    <div class="h-4 flex justify-start items-center gap-5">
                        <p class="font-poppins font-normal text-black">Masukkan Jumlah Kriteria</p>
                        <div class="rounded-lg overflow-hidden border border-[#B8B8B8]">
                            <select name="options" id="options" class="w-full px-3 hover:cursor-pointer">
                                <option value="1" class="font-poppins">1</option>
                                <option value="2" class="font-poppins">2</option>
                                <option value="3" class="font-poppins">3</option>
                                <option value="4" class="font-poppins">4</option>
                                <option value="5" class="font-poppins">5</option>
                                <option value="6" class="font-poppins">6</option>
                                <option value="7" class="font-poppins">7</option>
                                <option value="8" class="font-poppins">8</option>
                                <option value="9" class="font-poppins">9</option>
                                <option value="10" class="font-poppins">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5" id="input_form">
                        <div class="flex gap-10 items-center">
                            <div class="flex items-center gap-5">
                                <p class="w-auto h-6 font-poppins font-normal text-base text-black">Masukkan Kriteria</p>
                                <input type="text" class="w-[220px] h-6 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                            </div>
                            <div class="flex items-center gap-5">
                                <p class="w-auto h-6 font-poppins font-normal text-base text-black">Nilai Kriteria</p>
                                <input type="text" class="w-20 h-6 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                            </div>
                            <div class="flex items-center gap-5">
                                <p class="w-auto h-6 font-poppins font-normal text-base text-black">Cost/Benefit</p>
                                <input type="text" class="w-20 h-6 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                            </div>
                            <div class="flex items-center gap-5">
                                <p class="w-auto h-6 font-poppins font-normal text-base text-black">Nilai Bobot</p>
                                <input type="text" class="w-20 h-6 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-20 flex justify-end py-5 gap-5">
                    <a class="w-auto h-full bg-primary-border rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="../index.php">
                        <img src="../../src/images/home.svg" alt="">
                    </a>
                    <a class="w-[100px] h-full bg-primary-surface rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./sequence.php">
                        <p class="font-poppins text-base font-normal">Kembali</p>
                    </a>
                    <a class="w-[100px] h-full bg-primary-main rounded-[20px] flex justify-center items-center hover:cursor-pointer" href="./menampilkan-data-bobot-dan-kriteria.php">
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
                var row = '<div class="flex gap-10 items-center">\
                                <div class="flex items-center gap-5">\
                                    <p class="w-auto h-6 font-poppins font-normal text-base text-black">Masukkan Kriteria</p>\
                                    <input type="text" class="w-[220px] h-6 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">\
                                </div>\
                                <div class="flex items-center gap-5">\
                                    <p class="w-auto h-6 font-poppins font-normal text-base text-black">Nilai Kriteria</p>\
                                    <input type="text" class="w-20 h-6 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">\
                                </div>\
                                <div class="flex items-center gap-5">\
                                    <p class="w-auto h-6 font-poppins font-normal text-base text-black">Cost/Benefit</p>\
                                    <input type="text" class="w-20 h-6 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">\
                                </div>\
                                <div class="flex items-center gap-5">\
                                    <p class="w-auto h-6 font-poppins font-normal text-base text-black">Nilai Bobot</p>\
                                    <input type="text" class="w-20 h-6 font-poppins font-normal text-base text-black border border-zinc-400 rounded-lg">\
                                </div>\
                            </div>';
                row = $(row);
                $('#input_form').append(row);
            }
        });
    });
</script>
</body>
</html>