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
                  <h3 class="mb-0">Form Tambah Data User</h3>
                </div>
           
              </div>
            </div>
            <div class="card-body">
             
  <?php echo validation_errors();
    echo form_open('admin/tambah_user'); ?>
              
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama</label>
                        <input type="text" name="nama" id="input-username" class="form-control"  >
                      </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                          <label class=" form-control-label">Sekolah</label>
                          
                            <select name="id_sekolah" class="form-control ">
                               <?php
              foreach ($dt_sekolah as $a) {
                ?>
                <option value="<?php echo $a['id_sekolah']; ?>"> <?php echo $a['nama_sekolah'] ?>  </option>
                <?php
              }
              ?>
                            </select>
                          
                        </div>
                    </div>
                     <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Password</label>
                        <input type="password" name="password" id="input-last-name" class="form-control" >
                      </div>
                    </div>
                       <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">NIS</label>
                        <input type="number" name="nis" placeholder="Masukan NIS" id="input-first-name" class="form-control" >
                      </div>
                    </div>
                  
                  </div>
                  <div class="row">
                 
                 
                       <div class="col-lg-6">
                    <div class="form-group">
                          <label class=" form-control-label">Jurusan</label>
                          
                            <select name="id_jurusan" class="form-control ">
                               <?php
              foreach ($dt_jurusan as $a) {
                ?>
                <option value="<?php echo $a['id_jurusan']; ?>"> <?php echo $a['jurusan'] ?>  </option>
                <?php
              }
              ?>
                            </select>
                          
                        </div>
                      </div>
                       <div class="col-lg-6">
                    <div class="form-group">
                          <label class=" form-control-label">JK</label>
                          
                            <select name="jk" class="form-control ">
                             <option value="L">Laki-Laki</option>
                             <option value="P">Laki-Laki</option>
                            </select>
                          
                        </div>
                      </div>

                        

                    </div>
                   
                  </div>
                </div>
               
                
               
             <div class="col-4 ">
              
                  <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                </div>
             
              </form>



            </div>

          </div>
        </div>
      </div>