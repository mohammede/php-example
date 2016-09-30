<?php
//conect to database
//$mysql = new PDO($dsn,$username,"password","option");
//connect to mysql
try {
    $pdoConnect = new PDO("mysql:dbname=ecom;host=localhost","root","");
} catch (PDOException $e) {
    //handling connect error
    echo "connection error" . $e->getMessage();
}