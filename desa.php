<?php  
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$ambil = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM villages WHERE district_id='$ambil'");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
while($row = mysqli_fetch_assoc($query)) {?>
<a href=""><?php echo json_encode($row)?></a> <br>
	<?php
}

 ?>
</body>
</html>