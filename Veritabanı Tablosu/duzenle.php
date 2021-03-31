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

//veri düzenleme
$ogrenciNo = $_GET["ogrenciNo"];

//sorgulama
$sorgu = $baglan->query("select * from ogrenciler where ogrencino =$ogrenciNo ");

//burada html form kodunu yazdığımız için kapattık aşağıdan açtık.
$sonuc = $sorgu->fetch_assoc();
?>

	<form method="post" action="veriguncelle.php?ogrenciNo= <?php echo $ogrenciNo;             ?>"
		<h2>öğrenci düzenle</h2><br>

		Adı:<input type="text" name="ogrenci_adi" value=" <?php echo $sonuc["adi"];            ?>"><br>

		soyadı:<input type="text" name="ogrenci_soyadi "value=" <?php echo $sonuc["soyadi"];   ?>"><br>

		yaşı:<input type="text" name="ogrenci_yas"value=" <?php echo $sonuc["yas"];            ?>"><br>

		kilosu:<input type="text" name="ogrenci_kilo"value=" <?php echo $sonuc["kilo"];        ?>"><br>
	
		<input type="submit" value="Güncelle">


	</form>



<?php
//Bağlantı sağlandı.
echo"veritabanı bağlantısı sağlandı"."<br>";
mysqli_close($baglan);

?>