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
//veri güncelle

$ogrenciNo =$_GET["ogrenciNo"];

//veri kontrol
if ($_POST) {
	$ogrenci_adi    = $_POST["ogrenci_adi"];
	$ogrenci_soyadi = $_POST["ogrenci_soyadi"];
	$ogrenci_yas    = $_POST["ogrenci_yas"];
	$ogrenci_kilo   = $_POST["ogrenci_kilo"];


	if (($ogrenci_adi=="" && $ogrenci_soyadi=="" && $ogrenci_yas=="" && $ogrenci_kilo=="")) {
		
		if ($baglan->query("update ogrenciler set adi = '$ogrenci_adi', soyadi ='ogrenci_soyadi', yas = 'ogrenci_yas', kilo ='ogrenci_kilo' where ogrencino =$ogrenciNo")) {
			
			header("location:verilistele.php")
		}else{
			echo "Güncelleme İşlemi Yapılamadı.";
		}

	else{
		echo "Bilgiler Hatalı Veya Eksik Girildi!";
	}
}

//öğrenci numaraları ne kadar güncellesen de değişmez.

//Bağlantı sağlandı.
echo"veritabanı bağlantısı sağlandı"."<br>";
mysqli_close($baglan);

?>