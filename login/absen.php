<?php
	 include_once "koneksi.php";
date_default_timezone_set("Asia/jakarta");
	 class usr{}
$waktu = date("H:i:s");
	 $id_user = $_GET["id_user"];
	  $ip_address = $_GET["ip_address"];
	 $tanggal = date('Y-m-d');
	  $status = "Hadir";

	 if ((empty($id_user))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "User tidak boleh kosong";
	 	die(json_encode($response));
	 }  else {
		
		 	$num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM kehadiran WHERE tgl_absensi='".$tanggal."' and id_user='".$id_user."'"));

		 	if ($num_rows == 0){
		 		$query = mysqli_query($con, "INSERT INTO kehadiran (id_user, tgl_absensi,jam_masuk,status,ip_address) VALUES('".$id_user."','".$tanggal."','".$waktu."','".$status."','".$ip_address."')");

		 		if ($query){
		 			$response = new usr();
		 			$response->success = 1;
		 			$response->message = "Selamat Anda Berhasil Absen.";
		 			die(json_encode($response));

		 		} else {
		 			$response = new usr();
		 			$response->success = 0;
		 			$response->message = "Anda sudah absen";
		 			die(json_encode($response));
		 		}
		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Anda sudah absen";
		 		die(json_encode($response));
		 	}
		 }
	 

	 mysqli_close($con);

?>	