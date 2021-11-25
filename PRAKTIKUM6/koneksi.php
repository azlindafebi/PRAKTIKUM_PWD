<?php
$host           = "localhost"; // membuat variabel nama dengan isi variabel nama host
$username       = "root"; // membuat variabel username dengan isi root
$password       = ""; 
$databasename   ="akademik"; //membuat variabel nama database dengan isi akademik sesuai dengan database yang sudah dibuat

//membuat koneksi untuk ke database
$con            = @mysqli_connect($host,$username,$password,$databasename);

// mengecek koneksi jika gagal
if (!$con) {
    echo "Error: ". mysqli_connect_error();
    exit();
}
?>