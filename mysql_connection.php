<?php
$host="localhost"; //veya 127.0.0.1 yani local adresiniz, uzak bağlantı yapılacaksa sunucu IP adresi gerekli
$dbname="dbname";
$username="root";
$password="";
$char="utf8mb4";

$conn="mysql:host=$host;dbname=$dbname;charset=$char";
// bu kısım db ulaşmak için user-password ise db giriş yapmak için

try {
$pdo=new PDO($conn,$username, $password);
echo "Baglanti Basarili";
}
// try catch zorunlu değil, baglanti durumunu öğrenmek için kullanıyoruz
catch (PDOException $e) {
echo "".$e->getMessage()."";
//exception sıradışı demek yani $e değişkeni hata olursa mesaj olarak döndürecek
}

// 2. versiyon
/*

$host="localhost"; 
//eğer uzak bağlantı olsa ip adresi girilecek
$dbname="test";
$user="root";
$pass="";
$char="utf8mb4"; //karkter önmeli databese verilerini çözümler yoksa hata verir

try{
  $pdo= new PDO("mysql:host=$host;dbname=$dbname;charset=$char",$user,$pass);

  //phph data object(pdo) bağlantı kurmak için :"mysql:host=$host;dbname=$dbname;charset=$char" 
  //$user,$pass) bu kısm veritabanına giriş için
   echo "connection is succesful";
   //pdo başarılı ise echo çalışır
   
}catch(PDOException $e){
echo $e->getMessage();
//exception sıradışı durum demek $e ise artık sıra dışı durum tesbit değişkeni
}
*/
?>