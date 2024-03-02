<?php 
    class Database{
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $db = "sibtugas";
        public $connect;


        function __construct()
        {
            $this->connect=mysqli_connect(
                $this->host,
                $this->username,
                $this->password,
            );
            mysqli_select_db($this->connect,$this->db);
        }

        function getUser(){
            $data = mysqli_query($this->connect, "SELECT * FROM user");
            $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
            // var_dump($result);
            return $result;
        }
        function setUser($nama, $email, $whatsapp,$alamat){
            mysqli_query($this->connect, "INSERT INTO user VALUES(null,'$nama', '$email', '$whatsapp', '$alamat')");
        }
    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas29Ferbuari</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/skin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        $db = new Database();
       
        
        if(isset($_POST['submit'])){
            if($_POST['nama']== null ||$_POST['email']==null||$_POST['whatsapp']==null||$_POST['alamat']==null){
                die();
            }else{
                $db->setUser($_POST['nama'],$_POST['email'],$_POST['whatsapp'],$_POST['alamat']);
               
                header('location:tugas29feb.php');
                exit();
            }
        }
    ?>
    <header>
        <h1 class="text-center anta-regular">TUGAS 26 FEBRUARI</h1>
    </header>
    <main>
        <div class="anta-regular font-bold text-white">
            <a href="../../index.php" class="flex items-center "><i class='bx bx-left-arrow-alt'></i><p>Kembali</p></a>
        </div>

        <div class="container p-4 anta-regular">
            <form method="POST" action="?aksi=simpan">
                <h2 class="text-center text-white">Register Form</h2>
                <div class="input-item flex flex-row text-white gap-4 items-center">
                    <label for="nama">Name: </label>
                    <input class="p-2" type="text" name="nama" placeholder="Nama"  required>
                </div>
                <div class="input-item flex flex-row text-white gap-4 items-center mt-4">
                    <label for="email">Email: </label>
                    <input class="p-2" type="text" name="email" placeholder="Email" required>
                </div>
                <div class="input-item flex flex-row text-white gap-4 items-center mt-4">
                    <label for="whatsapp">Whatsapp: </label>
                    <input class="p-2" type="text" name="whatsapp" placeholder="nomor telepon" required>
                </div>
                <div class="input-item flex flex-row text-white gap-4 items-center mt-4">
                    <label for="alamat">Alamat: </label>
                    <input class="p-2" type="text" name="alamat" placeholder="Alamat" required>
                </div>
                <div class="flex items-center gap-4 justify-between">
                    <button type="submit" name="submit" class="btn text-white mt-4 anta-regular">
                        Simpan
                    </button>
                </div>

            </form>
        </div>
        <table class="mx-auto mt-4 text-white anta-regular p-4 border-white">
            <tr class="border-white">
                <th class="border-white p-2">Nama</th>
                <th class="border-white p-2">Email</th>
                <th class="border-white p-2">Whatsapp</th>
                <th class="border-white p-2">Alamat</th>
            </tr>
            <?php foreach( $db->getUser() as $user) {?>
            <tr class="text-center p-4 border-white">
                <td class="border-white p-2"><?php echo $user['Nama']?></td>
                <td class="border-white p-2"><?php echo $user['Email']?></td>
                <td class="border-white p-2"><?php echo $user['Whatsapp']?></td>
                <td class="border-white p-2"><?php echo $user['Alamat']?></td>
            </tr>
            <?php } ?>
        </table>

    </main>
</body>
</html>
