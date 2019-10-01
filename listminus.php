<?php
include 'dbconn.php';

if(!$conn)  {
	die ("Kapcsolódási hiba: " . mysqli_connect_error());
}

$data = [];
$m = date("m");

$sql = "SELECT * FROM kiadas WHERE kiadas_datuma > '2019-$m-01'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_assoc($result)) {
		// Kiadas tipusa
		if ($row["kiadas_tipusa"] == 2){
		array_push($data, $row)	;

		}
	}
}
echo json_encode($data);
mysqli_close($conn);
exit();
 ?>
