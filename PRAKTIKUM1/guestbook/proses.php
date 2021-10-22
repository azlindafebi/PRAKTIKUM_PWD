<?php

#variabel yang digunakan untuk menginput beberapa variabel dari form inputan
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$email =$_POST['email'];
$status =$_POST['status'];
$komentar =$_POST['komentar'];

#menampilkan output judul
echo"<head><title>My Guest Book</head></title>";

#membuka file guestbook.txt dengan mode read dan write
$fp=fopen("guestbook.txt","a+");

#menampilkan semua isi dari dalam file yang ada di guestbook.txt
fputs($fp,"$nama|$alamat|$email|$status|$komentar\n");

#menutup file
fclose($fp);

#menampilkan output 
echo"Terimakasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";

#tag hyperlink ke halaman tampilan.html
echo"<a href =tampilan.html>Isi Buku Tamu</a><br>";

#tag hyperlink ke halaman lihat.php
echo"<a href =lihat.php>Lihat Buku Tamu</a><br>";
?>