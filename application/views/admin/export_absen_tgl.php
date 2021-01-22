
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
$awal=$_POST["dari"];
$akhir=$_POST["sampai"];



?>

 <style>
  .saya
   {
  border : 1px solid black;

  border-collapse: collapse;
}
 .tes
   {

margin : 0px;
}
@media print {
    .footer,
    #non-printable {
        display: none !important;
    }
    #printable {
        display: block;
    }
}
.style5 {border: 1px solid black; border-collapse: collapse; font-family: "Calibri Light"; }
 </style>
<body>
<table width="100%" border="0" >
  <tr>
    <td  width="16%" height="178"><img src="<?php echo base_url(); ?>/assets/img/brand/akakom.png" width="150" height="150" /> </td >
    <td width="84%"><H2><p align="center"><strong>LAPORAN DATA ABSENSI KARYAWAN<br />
    </strong><strong>Nama Perusahaan</strong></p>
    </H2>
      <div align="center">Alamat Perusahaan
        </p>
    </div></td>
  </tr>
</table>
<div style='mso-element:para-border-div;border:none;border-top:solid windowtext 3.0pt;
padding:1.0pt 0cm 0cm 0cm'>
<center>
<br />
DARI TANGGAL <?php  echo $awal; ?> SAMPAI TANGGAL <?php  echo $akhir?> <br /><br /></center>

<table width="100%" border="0" class="saya">

                                    <thead>
                                    <tr><th class="style5" ><div align="center">No</div></th>
                                        <th class="style5" ><div align="center">NIS</div></th>
                                        <th class="style5" ><div align="center">Nama</div></th>
                                        <th class="style5" ><div align="center">JK</div></th>
                                        <th class="style5" ><div align="center">Sekolah</div></th>
                                        <th class="style5" ><div align="center">Jurusan</div></th>
                                        <th class="style5" ><div align="center">Tanggal</div></th>
                                            <th class="style5" ><div align="center">Datang</div></th>
                                            <th class="style5" ><div align="center">Pulang</div></th>
                                            <th class="style5" ><div align="center">Status</div></th>
                                          
                                       
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $no=1; ?>
                  <?php foreach($dt_search as $d): ?>
                                        <tr >
                <td class="style5"><div align="center"><?php echo $no++; ?></div></td>
                <td class="style5"><div align="center"><?php echo $d['nis']; ?> <?php  $id_user=$d['id_user']; ?></div></td>
                <td class="style5"><div align="center"><?php echo $d['nama']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['jk']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['nama_sekolah']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['jurusan']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['tgl_absensi']; ?>  </div></td>
                <td class="style5"><div align="center"><?php echo $d['jam_masuk']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['jam_keluar']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['status']; ?> </div></td>
               

                                         
                                      </tr>
                                             <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?php
   $no=1;
                                                       
                                                        $query=$this->db->query("Select count(*) as hadir from kehadiran where id_user = '$id_user' and status='Hadir' and tgl_absensi BETWEEN '$awal' AND '$akhir'");
                                                        foreach ($query->result() as $row): ?>
                                                       <?php  $hadir=$row->hadir; ?>
                                                        <?php endforeach; ?>
                                                         <?php
   $no=1;
                                                       
                                                        $query=$this->db->query("Select count(*) as ijin from kehadiran where id_user = '$id_user' and status='Ijin'  and tgl_absensi BETWEEN '$awal' AND '$akhir'");
                                                        foreach ($query->result() as $row): ?>
                                                       <?php  $ijin=$row->ijin; ?>
                                                        <?php endforeach; ?>
                                                        <p />
                               Akumulasi Absensi: Hadir=<?php echo $hadir; ?>, Ijin=<?php echo $ijin; ?>
</body>
</html>
 <script>
		window.print();
	</script>
