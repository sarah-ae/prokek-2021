<?php  
include 'sambungan.php';

$idguru = $_POST['idguru'];
$namaguru = $_POST['namaguru'];
$password = $_POST['password'];

$sql = "UPDATE guru SET namaguru='$namaguru', password='$password' WHERE idguru='$idguru' ";
$result = mysqli_query($sambungan, $sql);

if ($result == true)
	echo "berjaya kemaskini";
else
	echo "tidak berjaya kemaskini";


?>