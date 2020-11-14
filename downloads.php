<?php include("conn.php");?>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="stylesht.css">
<title>Download files</title>
</head>
<body>

<table>
<thead>
<th>ID</th>
<th>Filename</th>
<th>Size(in kbs)</th>
<th>Downloads</th>
<th>Action</th>
</thead>

<tbody>
<?php foreach ($files as $file): ?>
<tr>
<td><?php echo $file['id'];?></td>
<td><?php echo $file['name'];?></td>
<td><?php echo floor($file['size']/1000).'KB';?></td>
<td><?php echo $file['downloads'];?></td>
<td><a href="conn.php?file_id=<?php echo $file['id']?>">Download</a></td>
</tr>
<?php endforeach;?>

</tbody>
</table>
</body>
</html>
