 <?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data absensi by_tgl.xls");
?>
   <?php
$awal=$_POST["dari"];
$akhir=$_POST["sampai"];



?>
                         <center> DATA ABSENSI KARYAWAN  </center>

        <center><font size="-5"> DARI TANGGAL <?php echo $awal; ?> SAMPAI TANGGAL <?php echo $akhir; ?></font></center> <p >
               
                                <table border="1">

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
                                                       
                                                        $query=$this->db->query("Select count(*) as hadir from kehadiran where id_user = '$id_user' and status='Hadir'  and tgl_absensi BETWEEN '$awal' AND '$akhir'");
                                                        foreach ($query->result() as $row): ?>
                                                       <?php  $hadir=$row->hadir; ?>
                                                        <?php endforeach; ?>
                                                         <?php
   $no=1;
                                                       
                                                        $query=$this->db->query("Select count(*) as ijin from kehadiran where id_user = '$id_user' and status='Ijin' and tgl_absensi BETWEEN '$awal' AND '$akhir'");
                                                        foreach ($query->result() as $row): ?>
                                                       <?php  $ijin=$row->ijin; ?>
                                                        <?php endforeach; ?>
                                                        <p />
                               Akumulasi Absensi: Hadir=<?php echo $hadir; ?>, Ijin=<?php echo $ijin; ?>
        <?php
        exit ()
        ?>
                       