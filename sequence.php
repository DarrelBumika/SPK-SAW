<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPK - SAW</title>
    <link rel="stylesheet" href="./src/output.css">
</head>
<body>
<div class="w-screen h-screen flex justify-center items-center">
    <div class="w-[718px] h-auto flex flex-col gap-10 items-center">
        <p class="font-poppins font-semibold text-[27px] text-black text-center">Langkah Perhitungan SAW</p>
        <div class="w-full h-full flex flex-col relative">
            <div class="w-full h-[440px] grid grid-cols-3 p-10 gap-10 bg-primary-border rounded-[20px]">
                <div class="w-[187px] h-[345px] flex flex-col relative items-center transition-all ease-in-out hover:scale-105">
                    <div class="w-9 h-9 rounded-full bg-white flex justify-center items-center border border-primary-main absolute -translate-y-1/2">1</div>
                    <div class="w-full h-full rounded-[20px] bg-primary-main flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[252px] flex justify-center items-center">
                            <img src="./src/images/sequence-1.svg" alt="">
                        </div>
                        <div class="w-full h-[93px] bg-white flex justify-center items-center p-5">
                            <p class="font-poppins text-xs font-normal text-black text-center">
                                Menentukan data kriteria dan bobot
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[187px] h-[345px] flex flex-col relative items-center transition-all ease-in-out hover:scale-105">
                    <div class="w-9 h-9 rounded-full bg-white flex justify-center items-center border border-primary-main absolute -translate-y-1/2">2</div>
                    <div class="w-full h-full rounded-[20px] bg-white flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[252px] flex justify-center items-center">
                            <img src="./src/images/sequence-2.svg" alt="">
                        </div>
                        <div class="w-full h-[93px] bg-primary-main flex justify-center items-center p-5">
                            <p class="font-poppins text-xs font-normal text-white text-center">
                                Mengisi data alternatif & kriteria
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[187px] h-[345px] flex flex-col relative items-center transition-all ease-in-out hover:scale-105">
                    <div class="w-9 h-9 rounded-full bg-white flex justify-center items-center border border-primary-main absolute -translate-y-1/2">3</div>
                    <div class="w-full h-full rounded-[20px] bg-primary-main flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[252px] flex justify-center items-center">
                            <img src="./src/images/sequence-3.svg" alt="">
                        </div>
                        <div class="w-full h-[93px] bg-white flex justify-center items-center p-5">
                            <p class="font-poppins text-xs font-normal text-black text-center">
                                Menampilkan Hasil Perhitungan SAW
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full h-[440px] bg-primary-surface rounded-[20px] translate-x-3 translate-y-3 absolute -z-10"></div>
        </div>
        <a class="w-[228px] h-[40px] flex justify-center items-center hover:cursor-pointer ease-in-out transition-all hover:w-[258px] bg-primary-main rounded-full font-poppins font-semibold text-base text-white" href="./input_data_kriteria.php">Mulai Perhitungan</a>
    </div>
</div>

</body>
</html>