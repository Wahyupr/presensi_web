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
                  <h3 class="mb-0">Form Edit Data Absensi</h3>
                </div>
           
              </div>
            </div>
            <div class="card-body">
             
  <?php echo validation_errors();
    echo form_open('admin/update_absen'); ?>
              
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                     <div class="form-group">
                      <input type="hidden" name="id_absen" value="<?php echo $d['id_absen']; ?>" id="input-email" class="form-control" >
                          <label class=" form-control-label">Nama Karyawan</label>
                          
                               <select name="id_user" class="form-control ">
                               <?php
                                $id_user=$d['id_user'];
              foreach ($dt_user as $a) {
                ?>
                <option value="<?php echo $a['id_user']; ?>" <?php if($a['id_user'] ==$id_user) { echo ' selected="selected"';}   ?>>  <?php echo $a['nama'] ?></option>
                <?php
              }
              ?>
                            </select>     
                          
                        </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Tanggal</label>
                        <input type="date" name="tgl_absensi" value="<?php echo $d['tgl_absensi']; ?>" id="input-email" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Checkin</label>
                        <input type="text" name="jam_masuk" value="<?php echo $d['jam_masuk']; ?>" id="input-first-name" class="form-control" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Checkout</label>
                        <input type="text" name="jam_keluar" value="<?php echo $d['jam_keluar']; ?>" id="input-last-name" class="form-control" >
                      </div>
                    </div>
                     <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Status</label>
                        <select name="status" class="form-control ">
                             
            
                  <option value="Hadir" <?php if($d['status']=='Hadir') echo 'selected'; ?>>Hadir</option>        
                     <option value="Ijin" <?php if($d['status']=='Ijin') echo 'selected'; ?>>Ijin</option>        
                     <option value="Sakit" <?php if($d['status']=='Sakit') echo 'selected'; ?>>Sakit</option>
              
                            </select>
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