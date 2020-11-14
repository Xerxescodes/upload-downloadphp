<?php
include("conn.php");
$id= $food_name= $source_name =$price="";

function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if(!empty($_POST['id']) && !empty($_POST['food_name']) && !empty($_POST['source_name']) 
&& !empty($_POST['price']))
{
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$id= test_input($_POST["id"]);
$food_name=test_input($_POST["food_name"]);
$source_name =test_input($_POST["source_name"]);
$price =test_input($_POST["price"]);
}

$sql ="INSERT INTO menu(id,Food_name,Source_name,Price) VALUES
     ($id,'$food_name','$source_name',$price)";

if(mysqli_query($mysqli, $sql))
{
echo "Record added successfully";
}else
{
echo "Error: Could not execute $sql.".mysqli_error($mysqli);
}
}else
{
echo "Please fill all fields";
}

echo "<br><a href='index1.php'>View Result";
mysqli_close($mysqli);
?>

</font>