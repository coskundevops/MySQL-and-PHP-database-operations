<?php
include('mysql_connection.php'); //pdo ile db bağlandığımız php sayfamızı dahil ediyoruz.

// prepare ile mysql komutlarımızı çalıştıra biliyoruz 

//veri ekleme 
$insert= $pdo->prepare("INSERT INTO table1(column1,column2) VALUES ('first','second')");
$insert->execute();

//veri ekleme güncelleme
$update=$pdo->prepare("UPDATE FROM table1(column1,column2) VALUES ('first','second')");
$update->execute();

//prepare ile bütün mysql komutlarını çalıştırabilirsin silme işlemi
$del=$pdo->prepare("DELETE FROM table1 WHERE id=3");
$del->execute();
?>