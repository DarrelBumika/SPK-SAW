<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPK - SAW</title>
    <link rel="stylesheet" href="../output.css">
</head>
<body>
<div class="w-full h-full flex justify-center items-center pt-20 pb-10">
    <div class="w-auto h-auto flex flex-col gap-10 items-center">
        
        <div class="w-auto h-auto flex flex-col gap-10 items-center sticky">
            <p class="font-poppins font-semibold text-[27px] text-black text-center">Menampilkan Hasil Perhitungan</p>
            <div class="w-auto h-10 flex gap-3">
                <div class="w-[1046px] h-full bg-primary-surface rounded-[20px] flex items-center px-6">
                    <p href="" class="font-poppins font-normal text-sm text-primary-main">
                        <a href="">Home</a>
                        <span class="font-poppins font-normal text-sm text-black">/</span>
                        <a href="">Langkah</a>
                        <span class="font-poppins font-normal text-sm text-black">/</span>
                        <a href="" class="text-black">Menampilkan Hasil Perhitungan</a>
                    </p>
                </div>
                <div class="w-20 h-full flex items-center justify-center bg-primary-main rounded-[20px] font-poppins font-semibold text-base text-white">3 / 3</div>
            </div>
        </div>

        <div class="w-auto h-auto flex flex-col gap-10">

            <div class="w-auto h-auto flex flex-col gap-7">
                <p class="w-auto font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 3.</span> Menampilkan Hasil Perhitungan Kriteria</p>
                
                <div class="w-auto h-auto flex flex-col rounded-[20px] overflow-hidden border border-primary-border">
                    <div class="w-auto h-[75px] flex bg-primary-main">
                        <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">No.</div>
                        <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Alternatif</div>
                        <div class="w-auto h-full flex flex-col">
                            <div class="w-auto h-[38px] font-poppins font-semibold text-base text-white flex justify-center items-center">Kode Kriteria</div>
                            <div class="w-auto h-[37px] flex border-t border-primary-border bg-primary-hover">
                                <?php 
                                    for ($i = 0; $i < 12; $i++) {
                                        echo '<div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">A</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="w-auto h-auto flex flex-col">
                        <?php 
                            $kriteria = '';
                            for ($i = 0; $i < 12; $i++) {
                                $kriteria = $kriteria . '<div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center">B</div>';
                            }
                            for ($i = 0; $i < 10; $i++) {
                                $color = ($i % 2 == 0) ? 'white' : 'primary-surface';
                                echo '
                                    <div class="w-auto h-full flex border-t border-primary-border bg-'.$color.'">
                                        <div class="w-[60px] h-auto border-r border-primary-border bg-'.$color.'"></div>
                                        <div class="w-[285px] h-auto border-r border-primary-border bg-'.$color.'"></div>
                                        <div class="w-auto h-[37px] flex">
                                            '.$kriteria.'
                                        </div>
                                    </div>
                                ';
                            }
                        ?>     
                    </div>
                    <div class="w-auto h-[37px] flex bg-primary-hover border-t border-primary-border">
                        <div class="w-[345px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Min/Max</div>
                        <div class="w-auto h-full flex flex-col">
                            <div class="h-[37px] flex">
                                <?php 
                                    for ($i = 0; $i < 12; $i++) {
                                        echo '<div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">A</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="w-auto h-auto flex flex-col gap-7">
                <p class="w-auto font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 4.</span> Menampilkan Hasil Perhitungan Normalisasi</p>
                
                <div class="w-auto h-auto flex flex-col rounded-[20px] overflow-hidden border border-primary-border">
                    <div class="w-auto h-[75px] flex bg-primary-main">
                        <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">No.</div>
                        <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Alternatif</div>
                        <div class="w-auto h-full flex flex-col">
                            <div class="w-auto h-[38px] font-poppins font-semibold text-base text-white flex justify-center items-center">Kode Kriteria</div>
                            <div class="w-auto h-[37px] flex border-t border-primary-border bg-primary-hover">
                                <?php 
                                    for ($i = 0; $i < 12; $i++) {
                                        echo '<div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">A</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="w-auto h-auto flex flex-col">
                        <?php 
                            $kriteria = '';
                            for ($i = 0; $i < 12; $i++) {
                                $kriteria = $kriteria . '<div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center">B</div>';
                            }
                            for ($i = 0; $i < 10; $i++) {
                                $color = ($i % 2 == 0) ? 'white' : 'primary-surface';
                                echo '
                                    <div class="w-auto h-full flex border-t border-primary-border bg-'.$color.'">
                                        <div class="w-[60px] h-auto border-r border-primary-border bg-'.$color.'"></div>
                                        <div class="w-[285px] h-auto border-r border-primary-border bg-'.$color.'"></div>
                                        <div class="w-auto h-[37px] flex">
                                            '.$kriteria.'
                                        </div>
                                    </div>
                                ';
                            }
                        ?>     
                    </div>
                    <div class="w-auto h-[37px] flex bg-primary-hover border-t border-primary-border">
                        <div class="w-[345px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Bobot</div>
                        <div class="w-auto h-full flex flex-col">
                            <div class="h-[37px] flex">
                                <?php 
                                    for ($i = 0; $i < 12; $i++) {
                                        echo '<div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">A</div>';
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
                                    for ($i = 0; $i < 12; $i++) {
                                        echo '<div class="w-[67px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">A</div>';
                                    }
                                ?>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

            <div class="w-auto h-auto flex flex-col gap-7 items-center">
                <p class="w-auto font-poppins font-normal text-start text-base text-black"><span class="font-semibold">Langkah 5.</span> Menampilkan Hasil Perhitungan Ranking</p>
                <div class="w-auto h-auto flex flex-col rounded-[20px] overflow-hidden border border-primary-border">
                    <div class="w-auto h-[37px] flex bg-primary-main">
                        <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">No.</div>
                        <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Alternatif</div>
                        <div class="w-[155px] h-full border-r border-primary-border font-poppins font-semibold text-base text-white flex justify-center items-center">Rangking</div>
                    </div>
                    <div class="w-auto h-auto flex flex-col">
                        <?php 
                            for ($i = 0; $i < 10; $i++) {
                                $color = ($i % 2 == 0) ? 'white' : 'primary-surface';
                                echo '
                                    <div class="w-auto h-[37px] flex border-t border-primary-border bg-'.$color.'">
                                        <div class="w-[60px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center"></div>
                                        <div class="w-[285px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center"></div>
                                        <div class="w-[155px] h-full border-r border-primary-border font-poppins font-semibold text-base text-black flex justify-center items-center"></div>
                                    </div>
                                ';
                            }
                        ?>     
                    </div>
                </div>

            </div>

        </div>

        <div class="flex gap-4">
            <button class="w-auto h-[40px] px-10 bg-primary-surface rounded-full font-poppins font-normal text-sm text-black">Kembali</button>
            <button class="w-auto h-[40px] px-10 bg-primary-main rounded-full font-poppins font-normal text-sm text-white">Selesai</button>
        </div>
        
    </div>
</div>
</body>
</html>