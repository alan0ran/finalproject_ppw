<?php
include 'db.php';
$nim = $_GET['nim'];
$syntax = mysqli_query($mydb,"DELETE FROM mahasiswa WHERE nim='$nim'");

header("location:layer1.php");

?>