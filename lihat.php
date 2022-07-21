<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NoodleFood.com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" href="lihat.css">
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
        <div id="wrapshopcart"><br>
            <h3>Data Orderan Toko Noodle Food : </h3>
            <?php
                $fp = fopen("order.txt", "r");
                echo "<table border=0>";
                while ($isi = fgets($fp, 1000)){
                    $pisah = explode("|",$isi);
                    echo "<tr><td>Menu </td><td>: $pisah[0]</td></tr>";
                    echo "<tr><td>Harga </td><td>: $pisah[1]</td></tr>";
                    echo "<tr><td>Jumlah Pesan </td><td>: $pisah[2]</td></tr>";
                    echo "<tr><td>Total </td><td>: $pisah[3]</td></tr>";
                    echo "<tr><td>Nama Pembeli </td><td>: $pisah[4]</td></tr>";
                    echo "<tr><td>Email </td><td>: $pisah[5]</td></tr>";
                    echo "<tr><td>No.Telp </td><td>: $pisah[6]</td></tr>";
                    echo "<tr><td>Alamat </td><td>: $pisah[7]</td></tr>";
                    echo "<tr><td>Metode Pembayaran </td><td>: $pisah[8]</td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
                }
                echo "</table>";
                echo "<p align='center'>Menu <a href=index.php> Home </a></p>";
            ?>
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