<?php  
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$ambil = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM districts WHERE regency_id='$ambil'");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
while($row = mysqli_fetch_assoc($query)) {?>
<a href="desa.php?id=<?php echo $row['id']?>"><?php echo json_encode($row)?></a> <br>
	<?php
}

 ?>
</body>
</html>