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

//Bağlantı sağlandı.
echo"veritabanı bağlantısı sağlandı"."<br>";

//Veri ekleme.
$ogrenci_adi    = $_POST["ogrenci_adi"];
$ogrenci_soyadi = $_POST["ogrenci_soyadi"];
$ogrenci_yasi   = $_POST["ogrenci_yas"];
$ogrenci_kilo   = $_POST["ogrenci_kilo"];
$ogrenci_no     = $_POST["ogrenci_no"];

if ($ogrenci_adi=="") {
	echo "öğrenci adını giriniz.";

}elseif ($ogrenci_soyadi=="") {
	echo "öğrenci soyadını giriniz.";

}elseif ($ogrenci_yasi=="") {
	echo "öğrenci yaşını giriniz.";

}elseif ($ogrenci_kilo=="") {
	echo "öğrenci kilosunu giriniz.";

}elseif ($ogrenci_no=="") {
	echo "öğrenci numarasını giriniz.";
}

//ekleme komutu
$ogreci_ekle    ="insert into ogrenciler (adi,soyadi,yas,kilo,ogrencino) values ('$ogrenci_adi','$ogrenci_soyadi','$ogrenci_yasi','$ogrenci_kilo','$ogrenci_no')";
if (mysqli_query($baglan, $ogreci_ekle)) {
	echo "öğrenci başarılı bir şekilde eklendi."."<br>";
}else{
	echo "öğrenci eklenemedi, lütfen tekrar deneyin."."<br>";
}

//Veritabanı bağlantısını kapatıyoruz.
mysqli_close($baglan);

?>