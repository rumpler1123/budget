<?php
include 'dbconn.php';

$sum = 0;
$sql = "SELECT kiadas_osszege, kiadas_tipusa FROM kiadas";
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		if($row['kiadas_tipusa'] == 1){
			$sum = $sum + $row["kiadas_osszege"];
		} else {
			$sum = $sum - $row["kiadas_osszege"];
		}
	}
}
echo json_encode($sum);

mysqli_close($conn);
 ?>


