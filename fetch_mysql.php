<?php
include("query_mysql.php");

//fetchAll(PDO::FETCH_ASSOC) obj şeklinde çeker
 $fetchall=$pdo->query("SELECT * FROM table1")->fetchAll(); //fetchAll - fetchObject yani obje olarak -
 var_dump($fetchall ); 
 

// var_dump veya print_r verileri yazıdıracaktır.
 ?>