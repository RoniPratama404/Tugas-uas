<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="../css/daftar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav class="menu">
            <img src="../img/logo.png" alt="logo" width="5%">
            <h1><a href="home.php">STMIK LOMBOK</a></h1>
            <ul>
                <li><i class="fas fa-book"></i><a href="home.php">Profil</a></li>
                <li><a href="#">Petunjuk</a></li>
                <li><a href="#">Layanan</a></li>
                <li><a href="#">Usulan Buku</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="register">
                <form action="" method="post">
                    <label for="nama">Nama : </label>
                    <input type="text"><br>
                    <label for="nim">NIM : </label>
                    <input type="text"><br>
                    <label for="tmpt_tgl_lahir">Tempat, Taggal Lahir : </label>
                    <input type="text"><br>
                    <label for="jk">Jenis Kelamin : </label>
                    <select name="jk" id="">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select><br>
                    <label for="no_wa">No WhatsApp : </label>
                    <input type="number" name="" id=""><br>
                    <label for="email">Email : </label>
                    <input type="email" name="" id="">
                </form>
            </div>
        </div>
    </header>
</body>
</html>