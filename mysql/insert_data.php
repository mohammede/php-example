<?php
/*insert data into database*/
//connect to mysql
try {
    $pdoConnect = new PDO("mysql:dbname=ecom;host=localhost","root","");
} catch (PDOException $e) {
    //handling connect error
    echo "connection error" . $e->getMessage();
}
//insert data in table users
$pdoConnect->exec("INSERT INTO users (id,email,pass) VALUE (3,'amine','454648')");
//delete data from users
$pdoConnect->exec("DELETE FROM users WHERE email LIKE 'amine'");
//update data
$pdoConnect->exec("UPDATE users SET email='mohammed' WHERE email='amine'");
// insert data to table users dynamically
//1
$id="5";
$email="amine";
$pass="564543";
$query = "INSERT INTO users (id,email,pass) VALUE (:id,:email,:pass)";
$pdoResult = $pdoConnect->prepare($query);
$pdoExec = $pdoResult->execute(array(":id"=>$id,":email"=>$email,":pass"=>$pass));
//2
$id="6";
$email="simo";
$pass="564543";
$query = "INSERT INTO users (id,email,pass) VALUE (?,?,?)";
$pdoResult = $pdoConnect->prepare($query);
$pdoExec = $pdoResult->execute(array($id,$email,$pass));
