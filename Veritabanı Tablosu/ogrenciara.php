<?php

//Bağlantı bilgileri.
$server_adi      = "localhost";
$veritabani_adi  = "dersler";

$kullanici_adi   = "root";
$kullanici_sifre = "";

//Bağlantı oluşturuyoruz.
$baglan = mysqli_connect($server_adi,$kullanici_adi,$kullanici_sifre,$veritabani_adi);

//Bağlantı kontrol et.
if(!$baglan){
	die("bağlantı sağlanamadı.". mysql_connect_error());
}

echo '<h2>Arama Sonuçları</h2><hr>'

//öğrenci arama:
$arama_adi =_POST["arama_adi"];
$arama_soyadi =_POST["arama_soyadi"];

if (($arama_adi=="") or ($arama_soyadi=="")) {
	echo '<a href = "verilistele.php">Aradığınız kişinin adını soyadını yazınız <br> Geri Dön</a>';
}else{
	
	$sor = $baglan->query("select * from ogrenciler where adi='$arama_adi' or soyadi='$arama_soyadi'")
}
		//tablo başlangıç
echo '<table border="1" width"100%" borderclolor="#000">
<tr>
	<td height="30" borderclolor="#ddd" align="center">adı</td>
	<td height="30" borderclolor="#ddd" align="center">soyadı</td>
	<td height="30" borderclolor="#ddd" align="center">yas</td>
	<td height="30" borderclolor="#ddd" align="center">kilo</td>
	<td height="30" borderclolor="#ddd" align="center">ogrencino</td>
	<td height="30" borderclolor="#ddd" align="center">islemler</td>
</tr>';

//sonuçlar (listeleyeceksen while döngüsü kullanmalısın her zaman yukarıdaki üst kısım while döngüsünde değil)
while ($sonuc = $sor->fetch_assoc()) {
	
				?>

					<tr>
						<td bgcolor="#ccc"><?php echo $sonuc["adi"]; ?></td>
						<td bgcolor="#ccc"><?php echo $sonuc["soyadi"]; ?></td>
						<td bgcolor="#ccc"><?php echo $sonuc["yas"]; ?></td>
						<td bgcolor="#ccc"><?php echo $sonuc["kilo"]; ?></td>
						<td bgcolor="#ccc"><?php echo $sonuc["ogrencino"]; ?></td>

						<td bgcolor="#ccc"><a href="duzenle.php?ogrenciNo=<?php echo $sonuc["ogrencino"];  ?>">Düzenle</a> | 

							<a href="sıl.php?ogrenciNo=<?php echo $sonuc["ogrencino"];  ?>">Sil</a></td>
					</tr>
				<?php






}

echo'</table>';
}



//Bağlantı sağlandı.
echo"veritabanı bağlantısı sağlandı"."<br>";
mysqli_close($baglan);

?>