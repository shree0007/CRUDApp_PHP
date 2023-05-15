<?php

include 'connection.php';

$id = $_GET['id'];

$q = " DELETE FROM `customers` WHERE id = $id ";

mysqli_query($conn, $q);
echo "<script>window.location.href='display.php';</script>";

// header("location:display.php");

?>

<!-- <script>window.location.href='display.php';</script> -->