<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "tugas_3";

$conn = mysqli_connect($servername, $username,$password, $databasename);
if(!$conn){
    die("Koneksi tidak Berhasil");
}

?>