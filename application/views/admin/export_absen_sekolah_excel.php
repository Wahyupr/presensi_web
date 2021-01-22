
 <?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data absensi by_sekolah.xls");
?>

<?php
$awal=$_POST["dari"];
$akhir=$_POST["sampai"];

?>
<center> DATA ABSENSI KARYAWAN BERDASARKAN SEKOLAH  </center>
<center>
<br />
DARI TANGGAL <?php  echo $awal; ?> SAMPAI TANGGAL <?php  echo $akhir?> <br /><br /></center>

<table width="100%" border="1" >

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
                <td class="style5"><div align="center"><?php echo $d['nis']; ?> <?php  $id_sekolah=$d['id_sekolah']; ?></div></td>
                <td class="style5"><div align="center"><?php echo $d['nama']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['jk']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['nama_sekolah']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['jurusan']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['tgl_absensi']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['jam_masuk']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['jam_keluar']; ?> </div></td>
                <td class="style5"><div align="center"><?php echo $d['status']; ?> </div></td>
               

                                         
                                      </tr>
                                             <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?php
   $no=1;
                                                       
                                                        $query=$this->db->query("Select count(*) as hadir from kehadiran join user on user.id_user=kehadiran.id_user join sekolah on sekolah.id_sekolah=user.id_sekolah where user.id_sekolah = '$id_sekolah' and status='Hadir' and tgl_absensi BETWEEN '$awal' AND '$akhir'");
                                                        foreach ($query->result() as $row): ?>
                                                       <?php  $hadir=$row->hadir; ?>
                                                        <?php endforeach; ?>
                                                         <?php
   $no=1;
                                                       
                                                        $query=$this->db->query("Select count(*) as ijin from kehadiran join user on user.id_user=kehadiran.id_user join sekolah on sekolah.id_sekolah=user.id_sekolah where user.id_sekolah = '$id_sekolah' and status='Ijin' and tgl_absensi BETWEEN '$awal' AND '$akhir'");
                                                        foreach ($query->result() as $row): ?>
                                                       <?php  $ijin=$row->ijin; ?>
                                                        <?php endforeach; ?>
                                                        <p />
                               Akumulasi Absensi: Hadir=<?php echo $hadir; ?>, Ijin=<?php echo $ijin; ?>
</body>
</html>
 <?php
        exit ()
        ?>
