<?php
include("conn.php");

echo"<html>";
echo"<head>";
echo "<meta charset='utf-8'/>";
echo "<link rel='stylesheet' href='stylesht.css'>";
echo "</head>";

$sql = "SELECT id,Food_name,Source_name,Price FROM menu";
$result = $mysqli->query($sql);

if($result -> num_rows > 0)
{
echo "<table><tr>
<th>ID</th>
<th>Food</th>
<th>Source</th>
<th>Price</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

while($row = $result->fetch_assoc())
{
echo "<tbody>";
echo "<tr bgcolor='yellow'>";
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['Food_name']."</td>";
echo "<td>".$row['Source_name']."</td>";
echo "<td>".$row['Price']."</td>";
echo "<th bgcolor='green'><a href='update1.php?id=$row[id]'><font color='white'>Edit</font></a></th>";
echo "<th bgcolor='red'><a href='delete.php?id=$row[id]' onClick='return confirm('Are you sure you want to delete?');'><font color='white'>Delete</font></a></th>";
echo "</tr>";
}
echo "<br><center><a href='ad.html'>Add Record</a></centre>";
echo "</tbody>";
echo "</table>";
echo "</html>";
}else{
echo "0 Results";
}

$mysqli->close();
?>