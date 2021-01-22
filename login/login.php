<?php

     include_once "koneksi.php";

     class usr{}
    
     $nis = $_POST["nis"];
     $password = md5($_POST["password"]);
    
     if ((empty($nis)) || (empty($password))) { 
      $response = new usr();
      $response->success = 0;
      $response->message = "Kolom tidak boleh kosong"; 
      die(json_encode($response));
     }
    
     $query = mysqli_query($con, "SELECT * FROM user a join sekolah c on a.id_sekolah=c.id_sekolah join jurusan d on a.id_jurusan=d.id_jurusan join qrcode b on a.id_qrcode=b.id_qrcode  WHERE a.nis='$nis' AND  a.password='$password'");
    
     $row = mysqli_fetch_array($query);
    
     if (!empty($row)){
      $response = new usr();
      $response->success = 1;
      $response->message = "Selamat datang ".$row['nama'];
      $response->id = $row['id_user'];
      $response->nis = $row['nis'];
      $response->nama = $row['nama'];
         $response->nama_sekolah = $row['nama_sekolah'];
         $response->jurusan = $row['jurusan'];
           $response->qrcode = $row['qrcode'];
      die(json_encode($response));
        
     } else { 
      $response = new usr();
      $response->success = 0;
      $response->message = "Nis atau password salah";
      die(json_encode($response));
     }
    
     mysqli_close($con);

?>