<?php
include 'db.php';

$nim = $_GET['nim'];
$syntax = mysqli_query($mydb,"DELETE FROM user WHERE nim='$nim'");
$mydb->query($syntax);