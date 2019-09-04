<?php
// adatbázis kapcsoldás
include 'dbconn.php';
// Változók
$item = $_POST['item'];
$money = $_POST['money'];
$type = $_POST['type']; // 1 bevétel , 2 kiadás

// A bevétel eldöntése
if ($type == 1) {
	$sql = "INSERT INTO kiadas (kiadas_neve, kiadas_osszege, kiadas_tipusa)
			VALUES ('$item','$money',1)";
}

// Kiadás eldöntése
if ($type == 2) {
	$sql = "INSERT INTO kiadas (kiadas_neve, kiadas_osszege, kiadas_tipusa)
			VALUES ('$item','$money',2)";
}


// Rekord felvétele
if(mysqli_query($conn, $sql)){

}

//  adatábis kapcsolat bezárása
mysqli_close($conn);

?>