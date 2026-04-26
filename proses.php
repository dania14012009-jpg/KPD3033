<?php
include 'config.php';
if(isset($_POST['hantar'])){
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];

	$sql = "INSERT INTO pelajar (nama, kelas) VALUES ('$nama', '$kelas')";

if(mysqli_query($conn, $sql)){
	header('Location: senarai_pelajar.php');
	//echo "Rekod Berjaya Dimasukkan!";
	//echo "Nama: $nama<br>";
	//echo "Kelas: $kelas<br>";
	//echo '<a href = "borang.php">Kembali ke borang</a>';
}else{
	echo "Ralat: " . mysqli_error($conn);
}
}

mysqli_close($conn);
?>
