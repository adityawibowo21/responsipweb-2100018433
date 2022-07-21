<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>NoodleFood.com</title>
  		<link rel="stylesheet" href="index.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    </head>
    <body>
        <div class="header">
            <div class="jarak">
                <h1><img src="https://see.fontimg.com/api/renderfont4/8Mjdz/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTAwMCwiZnMiOjY1LCJmZ2MiOiIjRkZGRkZGIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/Tm9vZGxlIEZvb2Q/hidden-cocktails-regular-shadow.png"
                width="35%" height="35%">
                </h1>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Favorite</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Log Out</a></li>
            </ul>
            <div class="content">
                <div class="jarak">
                    <!-- kiri -->
                    <div class="kiri">
                        <!-- blog -->
                        <div class="jarak">
                            <?php
                                $fp = fopen("order.txt", "a+");
                                $menu= $_POST['menu'];
                                $harga= $_POST['harga'];
                                $beli = $_POST['beli'];
                                $total = $harga*$beli;
                                $nama = $_POST['nama'];
                                $email = $_POST['email'];
                                $telp = $_POST['telp'];
                                $alamat = $_POST['alamat'];
                                $bayar = $_POST['bayar'];
                                fputs($fp, "$menu|$harga|$beli|$total|$nama|$email|$telp|$alamat|$bayar\n");
                                fclose($fp);
                            ?>
                            <h2>Invoice</h2><hr>
                            <h4>Berikut adalah data lengkap Anda :</h4>
                            <?php
                                 echo "<tr><td>Nama </td><td>: $nama</td></tr><br>";
                                 echo "<tr><td>E-mail </td><td>: $email</td></tr><br>";
                                 echo "<tr><td>No.Telp </td><td>: $telp</td></tr><br>";
                                 echo "<tr><td>Alamat </td><td>: $alamat</td></tr><br>";
                             ?>
                             <h4>Menu yang Anda Pesan :</h4>
                             <?php
                                 echo "<tr><td>Menu </td><td>: $menu</td></tr><br>";
                                 echo "<tr><td>Harga </td><td>: $harga</td></tr><br>";
                                 echo "<tr><td>Jumlah pesan </td><td>: $beli</td></tr><br>";
                                 echo "<tr><td>Total </td><td>: $total</td></tr><br>";
                                 echo "<tr><td>Metode Pembayaran </td><td>: $bayar</td></tr><br>";
                             ?>
                             <form method="post" action="kirim.php">
                                <table border="0">
                                    <tr><td colspan="2">
                                        <input class="button3" type="submit" name="submit" value="Pesan Sekarang">
                                    </td></tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer2">
            <div class="jarak">
                <a class="social-media-icon facebook" href="https://web.facebook.com/profile.php?id=100082752360348"><span class="fab fa-facebook"></span></a>
                <a class="social-media-icon instagram" href="https://www.instagram.com/prdtyaw_/"><span class="fab fa-instagram"></span></a>
                <a class="social-media-icon" href="https://wa.me/6288232468177"><span class="fab fa-whatsapp"></span></a>
                <a class="social-media-icon" href="https://github.com/adityawibowo21"><span class="fab fa-github"></span></a>
                <p>Copyright © | 2022 By Aditya Prariyadi Wibowo</p>
            </div>
		</div>
    </body>
</html>