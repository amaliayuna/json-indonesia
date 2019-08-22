<?php  
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$query = mysqli_query($conn, 'SELECT * FROM provinces');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
while($row = mysqli_fetch_assoc($query)) {?>
<a href="kabupaten.php?id=<?php echo $row['id']?>"><?php echo json_encode($row)?> </a><br>
	<?php
}

 ?>
</body>
</html>