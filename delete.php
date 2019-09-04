<?php

include 'dbconn.php';

$id = $_POST['id'];


$sql = "DELETE FROM kiadas WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
}

mysqli_close($conn);
 ?>

