<?php

	 include_once "koneksi.php";

	 class usr{}

	 $nis = $_POST["nis"];
	 $password =md5( $_POST["password"]);
	 $nama = $_POST["nama"];
	 $jk = $_POST["jk"];
	  $id_sekolah = $_POST["id_sekolah"];
	   $id_jurusan = $_POST["id_jurusan"];
	 $confirm_password = md5($_POST["confirm_password"]);

	 if ((empty($nis))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom nis tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($password))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom password tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($confirm_password)) || $password != $confirm_password) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Konfirmasi password tidak sama";
	 	die(json_encode($response));
	 } else {
		 if (!empty($nis) && $password == $confirm_password){
		 	$num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE nis='".$nis."'"));

		 	if ($num_rows == 0){
		 		$query = mysqli_query($con, "INSERT INTO user (id_user, nis, password,nama,jk,id_sekolah,id_jurusan) VALUES(0,'".$nis."','".$password."','".$nama."','".$jk."','".$id_sekolah."','".$id_jurusan."')");

		 		if ($query){
		 			$response = new usr();
		 			$response->success = 1;
		 			$response->message = "Register berhasil, silahkan login.";
		 			die(json_encode($response));

		 		} else {
		 			$response = new usr();
		 			$response->success = 0;
		 			$response->message = "nis sudah ada";
		 			die(json_encode($response));
		 		}
		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "nis sudah ada";
		 		die(json_encode($response));
		 	}
		 }
	 }

	 mysqli_close($con);

?>