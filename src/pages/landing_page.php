<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPK - SAW</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body class="">
    <div class="w-svw h-svh flex justify-center items-center relative">
        <img src="/src/images/landing-bg.jpg" alt="" class="w-full h-full absolute -z-50">
        <div class="w-[800px] flex flex-col gap-10 items-center">
            <div class="flex flex-col gap-5 items-center">
                <p class="font-poppins text-5xl text-white text-center">Sistem Pendukung Keputusan Metode SAW</p>
                <p class="font-poppins text-l text-white">Berbasis Website</p>
            </div>
            <button class="w-[154px] h-[40px] bg-primary-main rounded-full poppins-semibold text-l text-white transition-all ease-in-out hover:w-[184px]" onclick="<?php header("Location: input_data_kriteria.php")?>">Home</button>
        </div>
    </div>
</body>
</html>