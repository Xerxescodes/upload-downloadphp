<?php
$target_dir = "uploads/";
$uploadok =1;
$target_file = $target_dir.basename($_FILES["the_file"]["name"]);
$filetypee = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if(isset($_POST['submit']) && $uploadok!=0) 
{
if($_FILES['the_file']['size']>0)
{
echo "<p>".$_FILES['the_file']['name']."file input successfull</p>";
}else{
echo "No File chosen.";
}
}

if($_FILES["the_file"]["size"]>8000000)
{
echo "Sorry, file too large.";
$uploadok = 0;
}
else if($filetypee != "jpg" && $filetypee != "txt" && $filetypee != "jpeg"
&& $filetypee != "pdf" && $filetypee != "png" && $filetypee != "gif"
&& $filetypee != "sql" && $filetypee != "rar")
{
echo "Sorry, file extension not allowed\n";
$uploadok = 0;
}
else
{
fileUpload();
}

function fileUpload()
{
include("conn.php");

$target_dir = "uploads/";
$file_name = $_FILES["the_file"]["name"];
$file_tmp = $_FILES["the_file"]["tmp_name"];
$file_size = $_FILES["the_file"]["size"];

if(move_uploaded_file($file_tmp,$target_dir.$file_name))
{

$sql ="INSERT INTO files(name,size,downloads) VALUES
     ('$file_name',$file_size,0)";

if(mysqli_query($mysqli, $sql))
{
echo "<h1> Record added successfully </h1>";
}else
{
echo "Error: Could not execute $sql.".mysqli_error($mysqli);
}
}
}
?>