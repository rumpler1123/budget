<?php

include 'dbconn.php';

$id = $_POST['id'];
$item = $_POST['item'];
$money = $_POST['money'];

$sql = "UPDATE kiadas SET kiadas_neve = '$item', kiadas_osszege = '$money' WHERE id = '$id'";

if(mysqli_query($conn, $sql))

mysqli_close($conn);
?>
