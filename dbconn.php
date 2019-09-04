<?php

// Kapcsolódás az adatbázishoz
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "havi_kiadas";

// Kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kapcsolat ellenőrzése
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "<br><br>";
}


/*
echo "Connected successfully";
echo "<br><br>";


// Adatbázis létrehozása
$sql = "CREATE DATABASE havi_kiadas";

if(mysqli_query($conn, $sql)){
 echo "Az adatábzis létrehozva";
 echo "<br><br>";
} else{
	echo "Hiba a létrehozáskor: " . mysqli_error($conn);
	echo "<br><br>";
}
*/

/*
// Tábla létrehozása
$createTable = "CREATE TABLE kiadas (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
kiadas_neve VARCHAR(30) NOT NULL,
kiadas_osszege INT(10) NOT NULL,
kiadas_tipusa INT(6) COMMENT '1 a bevétel, 2 a kiadás',
kiadas_datuma TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn, $createTable)){
	echo "A tábla elkészült!";
}else{
	echo "Hiba: " . mysqli_error($conn);
}

// Adatábzis kapcsolat lezárása
mysqli_close($conn);

*/

?>