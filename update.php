<?php
include("conn.php");
$id;
if(isset($_POST['updt']))
{
$id = $_POST['id'];
$food_name = $_POST['food_name'];
$source_name = $_POST['source_name'];
$price = $_POST['price'];
$sql =  "Update menu SET Food_name='$food_name',Source_name='$source_name',price='$price' WHERE
id=$id";

if(mysqli_query($mysqli, $sql))
{
echo "update successful";
}else
{
echo "error updating: ".mysqli_error($mysqli);
}

header("Location: index1.php");

mysqli_close($mysqli);
}
?>

