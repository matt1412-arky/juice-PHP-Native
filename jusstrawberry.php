<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menudrop.css">
    <title>Lovely Juice by Gita</title>
</head>

<body>
    <div class="nav">
        <div class="containernav">
            <?php include "koneksi.php";
            include "session.php";
            $ss = mysqli_query($conn,'select * from user where username="'.$_SESSION['user'].'" ');
            $ds = mysqli_fetch_array($ss);
            ?>
            <h1>
                <a href="#">Lovely Juice by Gita</a>
            </h1>
            <ul>
                <li><a href="home.php">Beranda</a></li>
                <li><a href="tentangkami.php">Tentang Kami</a></li>
                <li><a href="kontakkami.php">Kontak Kami</a></li>
                <li><a href="transaksi/login.php">Transaksi</a></li>
                <li class="dropdown"><a href="#">Welcome,<i><?=$ds['username'];?></i></a>
                    <ul class="isi-dropdown">
                        <li><a href="signout.php">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="fotostrawberry">
        </div>

        <div class="konten">
            <h2>Strawberry Juice</h2>
            <br>
            <p>
                Price : Rp. 15.000,-
            </p>
            <br>
            <p>Khasiat Jus Strawberry :</p><br>
            <p>- Menjaga kesehatan mata</p>
            <p>- Meningkatkan kekebalan tubuh</p>
            <p>- Mencegah kanker</p>
            <p>- Meningkatkan fungsi otak</p>
            <p>- Mencegah tekanan darah tinggi</p>
            <p>- Mengurangi risiko serangan jantung</p>
            <p>- Mencegah risiko stroke</p>
            <p>- Mengontrol gula darah</p>
            <p>- Membantu mengurangi berat badan</p>
            <p>- Menjaga kesehatan pencernaan</p>
            <br>
            <p>Start your healty day with lovely juice :D</p>
        </div>
    </div>
    <footer>
        <div class="cr">
            <h4>&copy; Lovely Juice by Gita 2022</h4>
        </div>
    </footer>
</body>

</html>