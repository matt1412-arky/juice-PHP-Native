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
        <div class="foto">
            <div class="kata">
                <h1>
                    Start your Healty Day <br>
                    With Lovely Juice
                </h1>
            </div>
        </div>

        <div class="konten">
            <h2>Favourite Juice</h2>
            <div class="menu">
                <div class="jusmangga">
                    <div class="fotojusmangga"></div>
                    <h4>Mango Juice</h4>
                    <p>Price : Rp. 15.000,-</p>
                    <br>
                    <a href="jusmangga.php">Lihat</a>
                </div>

                <div class="jusalpukat">
                    <div class="fotojusalpukat"></div>
                    <h4>Avocado Juice</h4>
                    <p>Price : Rp. 15.000,-</p>
                    <br>
                    <a href="jusalpukat.php">Lihat</a>
                </div>

                <div class="jusjambu">
                    <div class="fotojusjambu"></div>
                    <h4>Guava Juice</h4>
                    <p>Price : Rp. 15.000,-</p>
                    <br>
                    <a href="jusjambu.php">Lihat</a>
                </div>

                <div class="jusapel">
                    <div class="fotojusapel"></div>
                    <h4>Apple Juice</h4>
                    <p>Price : Rp. 15.000,-</p>
                    <br>
                    <a href="jusapel.php">Lihat</a>
                </div>

                <div class="jusstrawberry">
                    <div class="fotojusstrawberry"></div>
                    <h4>Strawberry Juice</h4>
                    <p>Price : Rp. 15.000,-</p>
                    <br>
                    <a href="jusstrawberry.php">Lihat</a>
                </div>

                <div class="jusnaga">
                    <div class="fotojusnaga"></div>
                    <h4>Dragon Juice</h4>
                    <p>Price : Rp. 15.000,-</p>
                    <br>
                    <a href="jusnaga.php">Lihat</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <footer>
        <div class="cr">
            <h4>&copy; Lovely Juice by Gita 2022</h4>
        </div>
    </footer>
</body>

</html>