<?php 
	include "koneksi.php";
	$id_user=$_GET['id_user'];
	
	$query = mysqli_query($con,"SELECT * FROM kehadiran where id_user='".$id_user."' ");
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysqli_close($con);
	
?>