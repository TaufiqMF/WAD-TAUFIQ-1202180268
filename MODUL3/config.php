<?php
// koneksi ke db
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "modul3";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    echo "<script>";
    echo "alert('Failed Connect into Database')";
    echo "</script>";
}
?>