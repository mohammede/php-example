<?php
/*use mysql query on php*/
//conect to databse
$mysql = new PDO("mysql:host=localhost","root","");
//ecom is a database
$mysql->query("USE ecom");
//show row id from tabel users
$qu = $mysql->query("SELECT * FROM users");
foreach ($qu->fetchAll() as $row) {
    echo $row["id"] . "<br>";
}