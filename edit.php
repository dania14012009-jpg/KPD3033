<?php
include 'config.php';

$id = $_GET['id']; //ambil dari page senarai_pelajar.php
//echo $id;
$sql = "select * from pelajar where id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title>KEMASKINI DATA PELAJAR</title>
</head>
<body>
	<h1>KEMASKINI DATA PELAJAR</h1>
<form action="proses_edit.php" method="POST">
	<label>Nama:</label>
	<input type="text" name="nama" value="<?php echo $row['nama'];?>"><br>
	<label>Kelas:</label>
	<input type="text" name="kelas"><br>
	<input type="submit" name="hantar" value="HANTAR">
</form>
</body>
</html>



