<?php
include 'config.php';

$sql = "SELECT*FROM pelajar";
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
	<style>
		table, th, td{
        border: 1px solid gold;
        border-collapse: collapse;
        padding: 8px;
        background: beige;
		}

	</style>
	<title>Senarai Pelajar</title>
</head>
<body>
<h2>Senarai Pelajar dalam Sistem</h2>

<table>
	<tr>
		<th>ID</th>
		<th>NAMA</th>
		<th>KELAS</th>
		<th>TINDAKAN</th>
		<th>KEMASKINI</th>
	</tr>

	<?php
	if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
      	  echo "<tr>";
      	echo "<td>".$row['id']."</td>";
      	echo "<td>" . $row['nama'] . "</td>";
      	echo "<td>" . $row['kelas'] . "</td>";
      	echo "<td><a href='delete.php?id=".$row['id']."'>Hapus</a></td>";
      	echo "<td><a href='edit.php?id=".$row['id']."'>Kemaskini</a></td>";
    	echo"</tr>";
        }

      	  echo "</tr>";
      	  
	}else{
		echo "<tr><td colspan='4'> Tiada rekod ditemui.</td></tr>";
	}
	?>

</table>
<br>
<a href="borang.php">Tambah Pelajar Baru</a>
</body>
</html>