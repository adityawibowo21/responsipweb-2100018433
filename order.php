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
                                if(isset($_POST['proses1'])){
                                    $menu="Mie Angel";
                                    $harga=9500;
                                    echo("<div class=col-md-3 col-sm-6>");
									echo("<div class='product-grid'>");
										echo("<div class='product-image'>");
											echo("<a href='#' class='image'>");
												echo("<img class='pic-1' src='https://www.miegacoan.com/images/MENU/MIE/i%20MIE%20ANGEL.jpg'>");
												echo("<img class='pic-2' src='https://www.miegacoan.com/images/MENU/MIE/i%20MIE%20ANGEL.jpg'>");
											echo("</a>");
											echo("<a href='#' class='product-like-icon' data-tip='Add to Wishlist'>");
												echo("<i class='far fa-heart'></i>");
											echo("</a>");
										echo("</div>");
										echo("<div class='product-content'>");
											echo("<ul class='rating'>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star disable'></li>");
												echo("<li class='disable'>(970 Terjual)</li>");
											echo("</ul>");
											echo("<h3 class='title'>Mie Angel</h3>");
											echo("<div class='price'>Rp 9.500</div>");
										echo("</div>");
									echo("</div>");
								echo("</div>");
                                }
                                if(isset($_POST['proses2'])){
                                    $menu="Mie Setan";
                                    $harga=9500;
                                    echo("<div class=col-md-3 col-sm-6>");
									echo("<div class='product-grid'>");
										echo("<div class='product-image'>");
											echo("<a href='#' class='image'>");
												echo("<img class='pic-1' src='https://www.miegacoan.com/images/MENU/MIE/ii%20MIE%20SETAN.jpg'>");
												echo("<img class='pic-2' src='https://www.miegacoan.com/images/MENU/MIE/ii%20MIE%20SETAN.jpg'>");
											echo("</a>");
											echo("<a href='#' class='product-like-icon' data-tip='Add to Wishlist'>");
												echo("<i class='far fa-heart'></i>");
											echo("</a>");
										echo("</div>");
										echo("<div class='product-content'>");
											echo("<ul class='rating'>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
                                                echo("<li class='fas fa-star'></li>");
												echo("<li class='disable'>(2RB Terjual)</li>");
											echo("</ul>");
											echo("<h3 class='title'>Mie Setan</h3>");
											echo("<div class='price'>Rp 9.500</div>");
										echo("</div>");
									echo("</div>");
								echo("</div>");
                                }
                                if(isset($_POST['proses3'])){
                                    $menu="Mie Iblis";
                                    $harga=9500;
                                    echo("<div class=col-md-3 col-sm-6>");
									echo("<div class='product-grid'>");
										echo("<div class='product-image'>");
											echo("<a href='#' class='image'>");
												echo("<img class='pic-1' src='https://www.miegacoan.com/images/MENU/MIE/iii%20MIE%20IBLIS.jpg'>");
												echo("<img class='pic-2' src='https://www.miegacoan.com/images/MENU/MIE/iii%20MIE%20IBLIS.jpg'>");
											echo("</a>");
											echo("<a href='#' class='product-like-icon' data-tip='Add to Wishlist'>");
												echo("<i class='far fa-heart'></i>");
											echo("</a>");
										echo("</div>");
										echo("<div class='product-content'>");
											echo("<ul class='rating'>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
                                                echo("<li class='fas fa-star'></li>");
												echo("<li class='disable'>(1RB+ Terjual)</li>");
											echo("</ul>");
											echo("<h3 class='title'>Mie Iblis</h3>");
											echo("<div class='price'>Rp 9.500</div>");
										echo("</div>");
									echo("</div>");
								echo("</div>");
                                }
                                if(isset($_POST['proses4'])){
                                    $menu="Mie Nyinyir Toping Ayam ";
                                    $harga=20500;
                                    echo("<div class=col-md-3 col-sm-6>");
									echo("<div class='product-grid'>");
										echo("<div class='product-image'>");
											echo("<a href='#' class='image'>");
												echo("<img class='pic-1' src='https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/IDGFSTI00000xpk-CYX2FBNHENMXCA/detail/menueditor_item_cab4ce079a9e45b09dc176812d68aa7b_1645062798279211926.webp'>");
												echo("<img class='pic-2' src='https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/IDGFSTI00000xpk-CYX2FBNHENMXCA/detail/menueditor_item_cab4ce079a9e45b09dc176812d68aa7b_1645062798279211926.webp'>");
											echo("</a>");
											echo("<a href='#' class='product-like-icon' data-tip='Add to Wishlist'>");
												echo("<i class='far fa-heart'></i>");
											echo("</a>");
										echo("</div>");
										echo("<div class='product-content'>");
											echo("<ul class='rating'>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
                                                echo("<li class='fas fa-star disable'></li>");
												echo("<li class='disable'>(765 Terjual)</li>");
											echo("</ul>");
											echo("<h3 class='title'>Mie Nyinyir Toping Ayam</h3>");
											echo("<div class='price'>Rp 20.500</div>");
										echo("</div>");
									echo("</div>");
								echo("</div>");
                                }
                                if(isset($_POST['proses5'])){
                                    $menu="Mie Julit Toping Jamur";
                                    $harga=20500;
                                    echo("<div class=col-md-3 col-sm-6>");
									echo("<div class='product-grid'>");
										echo("<div class='product-image'>");
											echo("<a href='#' class='image'>");
												echo("<img class='pic-1' src='https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/IDITE2020092312064451406/detail/menueditor_item_0fe26338ed194bc4ad33425693cf3e6b_1645066992601903678.webp'>");
												echo("<img class='pic-2' src='https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/IDITE2020092312064451406/detail/menueditor_item_0fe26338ed194bc4ad33425693cf3e6b_1645066992601903678.webp'>");
											echo("</a>");
											echo("<a href='#' class='product-like-icon' data-tip='Add to Wishlist'>");
												echo("<i class='far fa-heart'></i>");
											echo("</a>");
										echo("</div>");
										echo("<div class='product-content'>");
											echo("<ul class='rating'>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
												echo("<li class='fas fa-star'></li>");
                                                echo("<li class='fas fa-star disable'></li>");
												echo("<li class='disable'>(524 Terjual)</li>");
											echo("</ul>");
											echo("<h3 class='title'>Mie Julit Toping Jamur</h3>");
											echo("<div class='price'>Rp 20.500</div>");
										echo("</div>");
									echo("</div>");
								echo("</div>");
                                }

                                echo("<div class='border'>");
                                echo ("<h2>Daftar Pesanan Anda</h2>");
                                echo ("<p>Berikut adalah daftar pesanan Anda di toko kami : </p>"); 
                                echo ("<table><tr><td>Menu </td><td>: $menu</td></tr>");
                                echo ("<tr><td>Harga </td><td>: $harga</td></tr></table>");  
                                echo("<form method='post' action='proses.php' onSubmit='validasi()'>");
                    	        echo("<table border='0'>");
                                echo("<tr><td>Jumlah </td><td>: <input class='text1' name='beli' type='text' id='beli' size='5' maxlength='5' placeholder='+'></td></tr>"); 
								echo("<tr><td>");
								echo("<h2>Masukkan Data Berikut</h2>");
                                echo("<input class='text2' name='nama' type='text' id='nama' size='42' maxlength='25' placeholder='Nama'>");
                            	echo("</td></tr>");
								echo("<tr><td>");
                                echo("<input class='text2' name='menu' type='text' id='menu' size='42' maxlength='30' placeholder='Menu'>");
                            	echo("</td></tr>");
								echo("<tr><td>");
                                echo("<input class='text2' name='harga' type='number' id='harga' size='42' maxlength='30' placeholder='Harga'>");
                            	echo("</td></tr>");
                            	echo("<tr><td>");
                                echo("<input class='text2' name='email' type='email' id='email' size='42' maxlength='30' placeholder='E-mail'>");
                            	echo("</td></tr>");
								echo("<tr><td>");
                                echo("<input class='text2' name='telp' type='number' id='telp' size='42' maxlength='30' placeholder='No.Telp'>");
                            	echo("</td></tr>");
								echo("<tr><td>");
                                echo("<input class='text2' name='alamat' type='text' id='alamat' size='42' maxlength='30' placeholder='Alamat'>");
                            	echo("</td></tr>");
								echo("<tr><td>");
                                        echo("<select class='text2' name='bayar' id='bayar'>");
                                            echo("<option>Metode Pembayaran</option>");
                                            echo("<option>E-Wallet</option>");
                                            echo("<option>Kartu Debit</option>");
											echo("<option>Paypal</option>");
											echo("<option>COD</option>");
                                        echo("</select>");
                                echo("</td></tr>");
                            	echo("<tr><td>");
                                echo("<input class='button2' type='submit' name='submit' value='Checkout'>");
                            	echo("</td></tr>");
								echo("</table>");
                	            echo("</form>");   
                                echo("</div>");                        
                            ?>
							<script type="text/javascript">
								function validasi(){
									var beli=document.getElementById("beli").value;
									var nama=document.getElementById("nama").value;
									var menu=document.getElementById("menu").value;
									var harga=document.getElementById("harga").value;
									var email=document.getElementById("email").value;
									var telp=document.getElementById("telp").value;
									var alamat=document.getElementById("alamat").value;
									var bayar=document.getElementById("bayar").value;
									if(beli !="" && nama !="" && menu !="" && harga !="" && email !="" && telp!="" && alamat!="" &&bayar!=""){
										return true;
									}else{
										alert("Anda harus mengisi data dengan lengkap!");
									}
								}
							</script>
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