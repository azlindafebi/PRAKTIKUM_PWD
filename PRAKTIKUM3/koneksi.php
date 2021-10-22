<<<<<<< HEAD
<?php
$host           = "localhost";
$username       = "root";
$password       = "";
$databasename   ="akademik";
$con            = @mysqli_connect($host,$username,$password,$databasename);

if (!$con) {
    echo "Error: ". mysqli_connect_error();
    exit();
}
=======
<?php
$host           = "localhost";
$username       = "root";
$password       = "";
$databasename   ="akademik";
$con            = @mysqli_connect($host,$username,$password,$databasename);

if (!$con) {
    echo "Error: ". mysqli_connect_error();
    exit();
}
>>>>>>> caf1dfc1886ced604f20cf25c39e034f43f9f359
?>