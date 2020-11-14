<?php
$dbhost ='127.0.0.1';
$dbUser ='root';
$dbPass = 'xerxes54';
$dbname ='cafe2';

$mysqli = mysqli_connect($dbhost,$dbUser,$dbPass,$dbname);

if($mysqli == false)
{
die("Could not conect".mysqli_connect_error());
}

$id = $_GET['id'];
$sql = "SELECT * FROM menu WHERE id=$id";
$result = mysqli_query($mysqli,$sql);
$lines = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>