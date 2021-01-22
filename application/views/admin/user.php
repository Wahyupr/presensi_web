   <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 320px; background-image: url(<?php echo base_url();?>assets/img/theme/bgheader.png); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $this->session->userdata('nama');  ?></h1>
            <p class="text-white mt-0 mb-5">Selamat datang di Sistem Informasi Absensi Berbasis QR Code, DiHalaman ini anda dapat mengelola data absensi</p>
            <a href="<?php echo base_url('admin/add_user'); ?>" class="btn btn-neutral">Tambah</a>
            
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
                  <h3 class="mb-0">Data User</h3>
                </div>
           
              </div>
            </div>
            <div class="card-body">
             
  <div class="table-responsive">
                         <table class="table table-striped table-bordered table-hover" id="example1">

                                    <thead>
                                        <tr><th ><div align="center">No</div></th>
                                           <th ><div align="center">NIS</div></th>
                                        <th ><div align="center">Nama Siswa</div></th>
                                        <th ><div align="center">JK</div></th>
                                       
                                    
                                        <th ><div align="center">Sekolah</div></th>
                                        <th ><div align="center">Jurusan</div></th>
                                        
                                       
                                           
                                        <th ><div align="center">Password</div></th>
                                        <th ><div align="center">Opsi</div></th>
                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $no=1; ?>
                  <?php foreach($dt_user as $d): ?>
                                        <tr >
                                            <td><div align="center"><?php echo $no++; ?></div></td>
                                           
                <td><div align="center"><?php echo $d['nis']; ?>  </div></td>
                  <td><div align="center"><?php echo $d['nama']; ?> </div></td>
                  <td><div align="center"><?php echo $d['jk']; ?> </div></td>
               
                
                 <td><div align="center"><?php echo $d['nama_sekolah']; ?>  </div></td>
                 <td><div align="center"><?php echo $d['jurusan']; ?>  </div></td>
               
                 
                 <td><div align="center"><?php echo $d['password']; ?>  </div></td>
                 <td> <div align="center"><a  class="btn btn-primary" href="<?php echo base_url('admin/edit_user/'.$d['id_user']);?>"><i class="fa fa-edit "></i></a> 
                                           <a onclick="return confirm('anda yakin ingin menghapus data ini')" class="btn btn-danger" href="<?php echo base_url('admin/delete_user/'.$d['id_user']);?>"><i class="fa fa-trash "></i></a>
                                         </div></td>
        
       
                                        
                                      </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                      </div>



            </div>
          </div>
        </div>
      </div>