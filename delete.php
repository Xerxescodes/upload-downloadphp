<?php
include("conn.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "Delete FROM menu WHERE id=$id");
header("Location:index1.php");
?>