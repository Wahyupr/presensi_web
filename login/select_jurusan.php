<?php 
	include "koneksi.php";

	
	$query = mysqli_query($con,"SELECT * FROM jurusan  ");
	
	$jsonn = array();
	
	while($roww = mysqli_fetch_assoc($query)){
		$jsonn[] = $roww;
	}
	
	echo json_encode($jsonn);
	
	mysqli_close($con);
	
?>