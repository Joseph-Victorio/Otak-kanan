<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS26FEB</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/skin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="p-4">
    <header>
        <h1 class="text-center anta-regular">TUGAS 26 FEBRUARI</h1>
    </header>
    <main>
        <div class="anta-regular font-bold text-white">
            <a href="../../index.php" class="flex items-center "><i class='bx bx-left-arrow-alt'></i><p>Kembali</p></a>
        </div>
        <div class="container p-4 anta-regular">
            <form action="regis-output.php" method="POST">
                <h2 class="text-center text-white">Register Form</h2>
                <div class="input-item flex flex-row text-white gap-4 items-center">
                    <label for="nama">Name: </label>
                    <input class="p-2" type="text" name="nama" placeholder="Nama">
                </div>
                <div class="input-item flex flex-row text-white gap-4 items-center mt-4">
                    <label for="email">Email: </label>
                    <input class="p-2" type="text" name="email" placeholder="Email">
                </div>
                <div class="input-item flex flex-row text-white gap-4 items-center mt-4">
                    <label for="whatsapp">Whatsapp: </label>
                    <input class="p-2" type="text" name="whatsapp" placeholder="nomor telepon">
                </div>
                <div class="input-item flex flex-row text-white gap-4 items-center mt-4">
                    <label for="alamat1">Alamat 1: </label>
                    <input class="p-2" type="text" name="alamat1" placeholder="Alamat 1">
                </div>
                <div class="input-item flex flex-row text-white gap-4 items-center mt-4">
                    <label for="alamat2">Alamat 2: </label>
                    <input class="p-2" type="text" name="alamat2" placeholder="Alamat 2">
                </div>
                <div class="flex items-center gap-4 justify-between">
                    <button type="submit" name="submit" class="btn text-white mt-4 anta-regular">
                        Submit
                    </button>
                    <a href="regis-output.php">Halaman Output Registrasi</a>
                </div>

            </form>
        </div>
       
    </main>
</body>
</html>