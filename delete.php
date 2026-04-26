<?php
include 'config.php'; //sambung dgn db

if(isset($_GET['id'])){
$id = $_GET['id'];

//arahan sql delete

$sql = "DELETE FROM pelajar WHERE id = $id";

if(mysqli_query($conn, $sql)){
	header('Location: senarai_pelajar.php');
} else {
	echo "Ralat:".mysqli_error($conn);
}
} else {
	echo "ID tidak sah.";
}

//tutup sambungan
mysqli_close($conn);
?>