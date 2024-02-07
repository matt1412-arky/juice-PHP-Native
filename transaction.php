<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menudrop.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <title>Lovely Juice by Gita</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s7">
                <div class="card-panel">
                    <h3>Kasir</h3>
                    <form method="post" action="transaction_p.php">
                        <div class="input-field">
                            <?php
                            $rang = range(1, 9);
                            shuffle($rang);
                            $c = implode($rang);
                            $trans_code = $c;
                            ?>
                                <input type="text" name="trans_code" id="name" value="<?=$trans_code;?>" class="btn disabled">
                                <label for="name">Kode Transaksi</label>
                        </div>
                        <div>
                            <select name="id_menu" class="browser-default">
                                <option selected disabled>Pilih ID Menu: </option>
                                <?php
                                    include 'koneksi.php';
                                    $result = mysqli_query($conn, "SELECT * FROM menu ");
                                    while ($row = mysqli_fetch_assoc($result)) {?>
                                    <option value="<?php echo $row['id_menu']?>"><?php echo $row['id_menu']?></option>
                                <?php }?>
                            </select>
                            </div>
                            <div>
                            <select name="id_menu" class="browser-default">
                                <option selected disabled>Pilih Menu: </option>
                                <?php
                                    include 'koneksi.php';
                                    $result = mysqli_query($conn, "SELECT * FROM menu ");
                                    while ($row = mysqli_fetch_assoc($result)) {?>
                                    <option value="<?php echo $row['id_menu']?>"><?php echo $row['nama_menu']?></option>
                                <?php }?>
                            </select>
                            </div>
                            <div class="input-field">
                                <p class="grey-text">Jumlah</p>
                                <input type="number" name="jumlah" value="<?=$qur['jumlah'];?>">
                            </div>
                            <div class="input-field">
                                <input type="number" name="price" id="h" value="<?=$qur['price'];?>" class="btn disabled">
                                <label for="h">Harga Tiket</label>
                            </div>
                            <div class="input-field">
                                <?php
                                include "koneksi.php";
                                $squ = mysqli_query($conn, 'select * from user where username="'.$_SESSION['user'].'" ');
                                $quu = mysqli_fetch_array($squ);
                                ?>
                                    <input type="text" name="id_user" id="iu" value="<?=$quu['id_user'];?>" class="btn disabled">
                                    <label for="iu">ID User</label>
                            </div>
                            <div class="input-field">
                                <?php
                                include "koneksi.php";
                                $cs = mysqli_query($conn, 'select * from customer where username="'.$_SESSION['user'].'" ');
                                $cq = mysqli_fetch_array($cs);
                                ?>
                                    <input type="text" name="id_customer" id="ic" value="<?=$cq['id_customer'];?>" required class="btn disabled">
                                    <label for="ic">ID Customer</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="id_rute" id="ir" value="<?=$qur['id_rute'];?>" class="btn disabled">
                                <label for="ir">ID Rute</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="status" id="status" value="Proses" class="btn disabled">
                                <label for="status">Status</label>
                            </div>
                            <button class="btn waves-effect"><i class="ion-load-c"></i> Bayar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="cr">
            <h4>&copy; Lovely Juice by Gita 2022</h4>
        </div>
    </footer>
</body>

</html>