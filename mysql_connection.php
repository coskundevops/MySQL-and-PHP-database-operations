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
?>