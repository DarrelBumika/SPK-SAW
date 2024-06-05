<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil-perhitungan</title>
    <link rel="stylesheet" type="text/css" href="./src/index.css">
    <link rel="stylesheet" href="./src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="background-dark-purple">
    <div class="centered-element">
        <div class="flex flex-col justify-start items-center gap-10">
            <p class="font-poppins font-extrabold text-3xl text-white">Horray Selamat Kamu Telah <br/> Menyelesaikan Perhitungan SAW</p>
            <img class="picture item-center w-[500px] h-[500px]" src="./src/images/end.svg" alt="">
            <form action="./database/clear.php">
            <input type="submit" class="w-fit h-[40px] flex items-center hover:cursor-pointer px-10 bg-primary-surface rounded-full font-poppins font-normal text-sm text-black" href="./index.php" value="Home">
            </form>
        </div>
    </div>
</body>
</html>