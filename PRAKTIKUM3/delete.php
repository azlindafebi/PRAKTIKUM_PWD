<<<<<<< HEAD
<?php
//include database connection file
include_once("koneksi.php");

//get id from URL to delete that user
$nim=$_GET['nim'];

//delete user row from table based on given id
$result=mysqli_query($con,"DELETE FROM mahasiswa WHERE nim='$nim'");

//after delete redirect to home, so that latest user list will be displayed
header("Location.index.php");
=======
<?php
//include database connection file
include_once("koneksi.php");

//get id from URL to delete that user
$nim=$_GET['nim'];

//delete user row from table based on given id
$result=mysqli_query($con,"DELETE FROM mahasiswa WHERE nim='$nim'");

//after delete redirect to home, so that latest user list will be displayed
header("Location.index.php");
>>>>>>> caf1dfc1886ced604f20cf25c39e034f43f9f359
?>