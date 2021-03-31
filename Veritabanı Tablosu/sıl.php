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

//veri silme
$ogrenciNo =$_GET["ogrenciNo"];

	$sonuc=mysqli_query($baglan, "delete from ogrenciler where ogrencino=$ogrenciNo");

//işlem kontrolü
	if ($sonuc>0) {
		header("location:verilistele.php");
	}else{
		echo "öğrenci silinemedi.<a href='verilistele.php'><<Geri Dön</a>";
	}



//Bağlantı sağlandı.
echo"veritabanı bağlantısı sağlandı"."<br>";
mysqli_close($baglan);

?>