<?php
//Koneksi ke database
include "conn.php";

//Mendapatkan variabel post
$nama = isset($_POST ["nama_mahasiswa"]) ? $_POST ["nama_mahasiswa"] : "";
//echo $nama;
$alamat = isset($_POST ['alamat']) ? $_POST ['alamat'] : "";
//echo $alamat;
$nim = isset($_POST ['nim']) ? $_POST ['nim'] : "";
//echo $nim;


//Querry menambahkan data
$sql = "INSERT INTO `mahasiswa` ( `nama`, `nim`, `alamat`) VALUES ('".$nama."', '".$nim."', '".$alamat."');";
//echo $sql;

//Runing Query
$query = mysqli_query($conn, $sql);
if($query){
    $msg = "Simpan Data Mahasiswa Berhasil";
}else{
    $msg = "Simpan Data Gagal !";
}

//echo $msg;
//echo 'test';

$response = array (
    'status'=> 'OK',
    'msh'=> $msg,
);

echo json_encode($response);


?>