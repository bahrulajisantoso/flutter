<?php
include 'koneksi.php';
// $email = $_POST['email'];
$id = $_POST['id'];

$query = "SELECT * FROM user_mobiles WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

$response = [];
if (mysqli_num_rows($result) > 0) {
   $response['nama'] = $data['nama'];
   // $response['username'] = $data['username'];
   // $response['jenis_kelamin'] = $data['jenis_kelamin'];
   $response['tgl_lahir'] = $data['tgl_lahir'];
   $response['no_hp'] = $data['no_hp'];
   $response['email'] = $data['email'];
}

echo json_encode($response);
