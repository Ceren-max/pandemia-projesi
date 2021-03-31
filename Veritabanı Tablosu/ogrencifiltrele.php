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

echo "<h2>Öğrenci Listesi</h2><hr>";

$sorgu = mysqli_query($baglan, 'select * from ogrenciler');

echo 'öğrenci sayısı: ' . mysqli_num_rows($sorgu);
?>

	<form method="post"  action="ogrencifiltrele.php">
		Başlangıç Sayısı: <input type="text" name="baslangıc">
		Bitiş Sayısı: <input type="text" name="bitis">
		<input type="submit" value="Listele">

	</form>


<?php
//Veri listeleme burdaki sorgu her zaman en üstte yazar
$sor = $baglan->query("select * from ogrenciler order by ogrencino desc");  

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

//Bağlantı sağlandı.
echo"veritabanı bağlantısı sağlandı"."<br>";
mysqli_close($baglan);

?>