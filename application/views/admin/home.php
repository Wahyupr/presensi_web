   <!-- Header -->
    <!-- Header -->
    <div class="header pb-5 d-flex align-items-center" style="min-height: 300px; background-image: url(<?php echo base_url();?>assets/img/theme/bgheader.png); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $this->session->userdata('nama');  ?></h1>
            <p class="text-white mt-0 mb-5">Selamat datang di Sistem Informasi Absensi Berbasis QR Code, DiHalaman ini anda dapat mengelola data absensi</p>
   
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
       
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"><?php 
function hari_ini(){
  $hari = date ("D");

  switch($hari){
    case 'Sun':
      $hari_ini = "Minggu";
    break;

    case 'Mon':     
      $hari_ini = "Senin";
    break;

    case 'Tue':
      $hari_ini = "Selasa";
    break;

    case 'Wed':
      $hari_ini = "Rabu";
    break;

    case 'Thu':
      $hari_ini = "Kamis";
    break;

    case 'Fri':
      $hari_ini = "Jumat";
    break;

    case 'Sat':
      $hari_ini = "Sabtu";
    break;
    
    default:
      $hari_ini = "Tidak di ketahui";   
    break;
  }

  return "" . $hari_ini . "";

}
echo "Absensi"; echo "  ";
echo   hari_ini(); echo ", ". date('d-m-Y');

?> </h3>
                </div>
           
              </div>
            </div>
            <div class="card-body">
             
  <div class="table-responsive">
                         <table class="table table-striped table-bordered table-hover" id="example1">

                                    <thead>
                                        <tr><th ><div align="center">No</div></th>
                                        <th ><div align="center">Nama</div></th>
                                        <th ><div align="center">IP </div></th>
                                        <th ><div align="center">Tanggal</div></th>
                                        <th ><div align="center">Datang</div></th>
                                        <th ><div align="center">Pulang</div></th>
                                        <th ><div align="center">Status</div></th>
                                        <th ><div align="center">Alasan</div></th>
                                        <th ><div align="center">Foto</div></th>
                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $no=1; ?>
                  <?php foreach($dt_absen as $d): ?>
                                        <tr >
                                            <td><div align="center"><?php echo $no++; ?></div></td>
                                           
                
                  <td><div align="center"><?php echo $d['nama']; ?> </div></td>
                  <td><div align="center"><?php echo $d['ip_address']; ?> </div></td>
                
                 <td><div align="center">
                 </div><?php echo $d['tgl_absensi']; ?></td>
                 <td><div align="center"><?php echo $d['jam_masuk']; ?>  </div></td>
                 <td><div align="center"><?php echo $d['jam_keluar']; ?>  </div></td>
                 <td><div align="center"><?php echo $d['status']; ?>  </div></td>
                 <td><div align="center"><?php echo $d['alasan']; ?>  </div></td>
             
                 <td>
                    <img style="height: 100px" src="<?php echo $d["photo"] ?>"><br />
                     <a href="<?php echo $d["photo"] ?>">Lihat</a>
                </td>
        
        <?php endforeach; ?>
                                        
                                      </tr>
                                   
                                    </tbody>
                                </table>
                      </div>



            </div>
          </div>
        </div>
      </div>