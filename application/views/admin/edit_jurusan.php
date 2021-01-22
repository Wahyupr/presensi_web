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
                  <h3 class="mb-0">Form Edit Data Jurusan</h3>
                </div>
           
              </div>
            </div>
            <div class="card-body">
             
  <?php echo validation_errors();
    echo form_open('admin/update_jurusan'); ?>
              
                <div class="pl-lg-4">
                  <div class="row">
                 
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Jurusan</label>
                        <input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"  class="form-control" >
                         <input type="hidden" name="id_jurusan" value="<?php echo $d['id_jurusan']; ?>"  class="form-control" >
                      </div>
                    </div>
                    
               
                
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Kelas</label>
                        <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>" id="input-first-name" class="form-control" >
                      </div>
                    </div>
                       </div>
                     
                </div>
               
                
               
             <div class="col-4 ">
              
                  <input type="submit" class="btn btn-sm btn-primary" value="Update">
                </div>
             
              </form>



            </div>

          </div>
        </div>
      </div>