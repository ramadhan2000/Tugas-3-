<?php
// koneksi ke database
include "conn.php";

//membuat Query/sql untuk mengambil seluruh data mahasiswa
$sql = "SELECT * FROM mahasiswa";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query)){
    //echo $data["nama"]."";

    //menampilkan json 
    $item[] = array(
        'id'=>$data["id"],
        'nama'=>$data["nama"],
        'nim'=> $data ["nim"],
        'alamat'=> $data ["alamat"]
    );
}

$response = array (
    'status'=> 'OK',
    'data'=> $item,
);

echo json_encode($response);

?>