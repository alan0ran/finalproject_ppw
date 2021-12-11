<?php
include 'db.php';
$nim = $_GET['nim'];

$syntax = "DELETE FROM penyimpanan WHERE nim='$nim'";
$mydb->query($syntax);

$syntax2 = "DELETE FROM mahasiswa WHERE nim='$nim'";
$mydb->query($syntax2);

header("location:index.php");

?>