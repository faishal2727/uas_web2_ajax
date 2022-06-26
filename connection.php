<?php
session_start();
$host = 'ec2-52-22-136-117.compute-1.amazonaws.com';
$port = '5432';
$user = 'rmaobaskcrddza'; 
$password = '379414a3cae3e65b9cecc77bbe25316bdbadf5e0a1dcf7577b63398999c407fa';
$db   = 'd6nfmgm8c298i8';

$connection = pg_connect("host=$host port =$port dbname=$db user=$user password=$password");
// if($connection){
// echo 'Koneksi Berhasil';
// }
// else{
// echo 'Koneksi Gagal';
// }
?>