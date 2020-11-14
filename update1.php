<?php include("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>XERHILL VIRTUAL LIBRARY</title>
</head>
<body>
<form name = "form2" method="post" action="update.php">
<table border = "0">
<tbody>
<?php foreach($lines as $line):?>
<tr>
<td>Food</td>
<td><input type="text" name="food_name" value="<?php echo $line['Food_name'];?>"</td>
</tr>
<tr>
<td>Source</td>
<td><input type="text" name="source_name" value="<?php echo $line['Source_name'];?>"</td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name="price" value="<?php echo $line['Price'];?>"</td>
</tr>
<tr>
<?php endforeach;?>
<td><input type="hidden" name="id" value="<?php echo"".$_GET['id'];?>"></td>
<td><input type="submit" name="updt" value="Update"></td>
</tr>
</tbody>
</table>
</form>
</body>
</html>