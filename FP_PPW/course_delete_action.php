<?php
include 'db.php';
$code = $_GET['code'];

$syntax = "DELETE FROM mata_kuliah WHERE code='$code'";
$mydb->query($syntax);

header("location:admin-layer1.php");

?>