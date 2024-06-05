<?php
try{
    $host = "localhost";
    $db_name = "gajian";
    $username ="root";
    $pass =" ";
    $koneksi= new PDO("mysql:host=" . $host . ";dbname=" . 
    $db_name, $username, $pass);
    $koneksi->exec("set names utf8");

    $sql ="SELECT*FROM gaji_karyawan_tahu_bulat";
    $result = $koneksi->query($sql)-> fetch();

    var_dump($result);


}catch(PDOException $exception){
    echo "Database could not be connected: " . $exception->getMessage();
}


?>