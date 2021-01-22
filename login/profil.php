<?php
	include "koneksi.php";
	
	$id_user 	= $_GET['id_user'];
	
	class emp{}
	
	if (empty($id_user)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Error Mengambil Data"; 
		die(json_encode($response));
	} else {
		$query 	= mysqli_query($con,"SELECT * FROM user WHERE id_user='".$id_user."'");
		$row 	= mysqli_fetch_array($query);
		
		if (!empty($row)) {
			$response = new emp();
			$response->success = 1;
			$response->id_user = $row["id_user"];
			$response->nama = $row["nama"];
			$response->nis = $row["nis"];
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error Mengambil Data";
			die(json_encode($response)); 
		}	
	}
?>