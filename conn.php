<?php
$dbhost ='127.0.0.1';
$dbUser ='root';
$dbPass = 'xerxes54';
$dbname ='cafe2';

$mysqli = mysqli_connect($dbhost,$dbUser,$dbPass,$dbname);

$sql = "SELECT * FROM files";
$result = mysqli_query($mysqli,$sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if($mysqli == false)
{
die("Could not conect".mysqli_connect_error());
}

if(isset($_GET['file_id'])){
$id = $_GET['file_id'];

$sql1 = "SELECT * FROM files WHERE id=$id";
$result1 = mysqli_query($mysqli, $sql1);

$filee = mysqli_fetch_assoc($result1);
$filepath ='uploads/'.$filee['name'];

if(file_exists($filepath)){
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' .basename($filepath));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: '.filesize('uploads/'.$filee['name']));
readfile('uploads/'.$filee['name']);

$newCount = filee['downloads']+1;
$sql3 =  "Update files SET downloads = $newCount WHERE id=$id";
if(mysqli_query($mysqli, $sql3))
{
echo "update successful";
}else
{
echo "error updating: ".mysqli_error($mysqli);
}

exit;
}
}
?>