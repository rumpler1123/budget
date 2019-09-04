<?php
include 'dbconn.php';

if(!$conn)  {
	die ("Kapcsolódási hiba: " . mysqli_connect_error());
}

$sql = "SELECT * FROM kiadas";
$result = mysqli_query($conn, $sql);
$data = [];

if(mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_assoc($result)) {
		// Kiadas tipusa
		if ($row["kiadas_tipusa"] == 1){
		array_push($data, $row)	;

	}
}

}

echo json_encode($data);
mysqli_close($conn);
exit();
 ?>