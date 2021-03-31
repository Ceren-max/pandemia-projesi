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
mysqli_close($baglan);

?>