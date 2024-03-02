<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/skin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="anta-regular font-bold text-white">
            <a href="tugas26feb.php" class="flex items-center "><i class='bx bx-left-arrow-alt'></i><p>Kembali</p></a>
        </div>
<?php
    session_start();

        $_SESSION['NAMA'];
        $_SESSION['EMAIL'];
        $_SESSION['WHATSAPP'];
        $_SESSION['ALAMAT1'];
        $_SESSION['ALAMAT2'];
   

    if(isset($_POST['submit'])){
        $name = $_POST['nama'];
        $email = $_POST['email'];
        $WA = $_POST['whatsapp'];
        $address1 = $_POST['alamat1'];
        $address2 = $_POST['alamat2'];

        $_SESSION['NAMA'] = $name;
        $_SESSION['EMAIL'] = $email;
        $_SESSION['WHATSAPP'] = $WA;
        $_SESSION['ALAMAT1'] = $address1;
        $_SESSION['ALAMAT2'] = $address2;
    }
?>
<br>
        <div class="container mt-4 p-4 text-white anta-regular">
            <h2 class="text-center text-white anta-regular">REGISTER OUTPUT</h2>
            <h3>Nama: <span class="output"><?php echo $_SESSION['NAMA']; ?></span></h3>
            <h3>Email: <span class="output"><?php echo $_SESSION['EMAIL']; ?></span></h3>
            <h3>Whatsapp: <span class="output"><?php echo $_SESSION['WHATSAPP']; ?></span></h3>
            <h3>Alamat 1: <span class="output"><?php echo $_SESSION['ALAMAT1']; ?></span> </h3>
            <h3>Alamat 2: <span class="output"><?php echo $_SESSION['ALAMAT2']; ?></span></h3>
        </div>
</body>
</html>