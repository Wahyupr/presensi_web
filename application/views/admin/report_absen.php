   <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 320px; background-image: url(<?php echo base_url();?>assets/img/theme/bgheader.png); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1 class="display-2 text-white">Hello <?php echo $this->session->userdata('nama');  ?></h1>
            <p class="text-white mt-0 mb-5">Selamat datang di Sistem Informasi Absensi Berbasis QR Code, DiHalaman ini anda dapat mengelola data absensi</p>
            <a  data-toggle="modal" data-target="#myModal" href="#" class="btn btn-neutral">By Name PDF</a>
            <a  data-toggle="modal" data-target="#myModall" href="#" class="btn btn-neutral">By Name Excel</a>
              <a  data-toggle="modal" data-target="#myModalsekpdf" href="#" class="btn btn-neutral">By Sekolah PDF</a>
              <a  data-toggle="modal" data-target="#myModalsekexcel" href="#" class="btn btn-neutral">By Sekolah Excel</a>
                <a  data-toggle="modal" data-target="#myModaljurpdf" href="#" class="btn btn-neutral">By Jurusan PDF</a>
                <a  data-toggle="modal" data-target="#myModaljurexcel" href="#" class="btn btn-neutral">By Jurusan Excel</a>
            
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
                  <h3 class="mb-0">Report Absensi</h3>
                </div>
           
              </div>
            </div>
            <div class="card-body">
             
  <div class="table-responsive">

      <div class="modal fade" id="myModall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                     <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">
                                          
<?php echo validation_errors();
    echo form_open('admin/export_absen_tgl_excel'); ?>
                                  <table width="100%">

          <tr>
             <td height="32">Dari</td>
             <td>:</td>
             <td><input type="date" name="dari" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px" ></td>
         </tr>
         <p>
         <tr>
             <td height="32">Sampai</td>
             <td>:</td>
             <td><input type="date" name="sampai" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px"></td>
         </tr>
          <tr>
             <td height="32">Nama</td>
             <td>:</td>
             <td><select name="id_user">
    <?php foreach ($dt_user as $d): ?>
    <option value="<?php echo $d['id_user'];?>"><?php echo $d['nama']; ?></option>
    <?php endforeach ?></td>
         </tr>
         
         <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
<td><input type="submit" name="search_submit"  value="Download" class="btn btn-primary">
</td>
        </tr>
       
        </table>
     </form>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
   
               
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                     <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">
                                          
<?php echo validation_errors();
    echo form_open('admin/export_absen_tgl'); ?>
                                  <table width="100%">

          <tr>
             <td height="32">Dari</td>
             <td>:</td>
             <td><input type="date" name="dari" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px" ></td>
         </tr>
         <p>
         <tr>
             <td height="32">Sampai</td>
             <td>:</td>
             <td><input type="date" name="sampai" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px"></td>
         </tr>
           <tr>
             <td height="32">Nama</td>
             <td>:</td>
             <td><select name="id_user">
    <?php foreach ($dt_user as $d): ?>
    <option value="<?php echo $d['id_user'];?>"><?php echo $d['nama']; ?></option>
    <?php endforeach ?></td>
         </tr>
         <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
<td><input type="submit" name="search_submit"  value="Download" class="btn btn-primary">
</td>
        </tr>
        
       
        </table>
     </form>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                             <div class="modal fade" id="myModalsekpdf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                     <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">
                                          
<?php echo validation_errors();
    echo form_open('admin/export_absen_sekolah_pdf'); ?>
                                  <table width="100%">

          <tr>
             <td height="32">Dari</td>
             <td>:</td>
             <td><input type="date" name="dari" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px" ></td>
         </tr>
         <p>
         <tr>
             <td height="32">Sampai</td>
             <td>:</td>
             <td><input type="date" name="sampai" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px"></td>
         </tr>
           <tr>
             <td height="32">Sekolah</td>
             <td>:</td>
             <td><select name="id_sekolah">
    <?php foreach ($dt_sekolah as $d): ?>
    <option value="<?php echo $d['id_sekolah'];?>"><?php echo $d['nama_sekolah']; ?></option>
    <?php endforeach ?></td>
         </tr>
         <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
<td><input type="submit" name="search_submit"  value="Download" class="btn btn-primary">
</td>
        </tr>
        
       
        </table>
     </form>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="myModalsekexcel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                     <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">
                                          
<?php echo validation_errors();
    echo form_open('admin/export_absen_sekolah_excel'); ?>
                                  <table width="100%">

          <tr>
             <td height="32">Dari</td>
             <td>:</td>
             <td><input type="date" name="dari" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px" ></td>
         </tr>
         <p>
         <tr>
             <td height="32">Sampai</td>
             <td>:</td>
             <td><input type="date" name="sampai" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px"></td>
         </tr>
           <tr>
             <td height="32">Sekolah</td>
             <td>:</td>
             <td><select name="id_sekolah">
    <?php foreach ($dt_sekolah as $d): ?>
    <option value="<?php echo $d['id_sekolah'];?>"><?php echo $d['nama_sekolah']; ?></option>
    <?php endforeach ?></td>
         </tr>
         <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
<td><input type="submit" name="search_submit"  value="Download" class="btn btn-primary">
</td>
        </tr>
        
       
        </table>
     </form>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                                    <div class="modal fade" id="myModaljurpdf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                     <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">
                                          
<?php echo validation_errors();
    echo form_open('admin/export_absen_jurusan_pdf'); ?>
                                  <table width="100%">

          <tr>
             <td height="32">Dari</td>
             <td>:</td>
             <td><input type="date" name="dari" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px" ></td>
         </tr>
         <p>
         <tr>
             <td height="32">Sampai</td>
             <td>:</td>
             <td><input type="date" name="sampai" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px"></td>
         </tr>
           <tr>
             <td height="32">Sekolah</td>
             <td>:</td>
             <td><select name="id_jurusan">
    <?php foreach ($dt_jurusan as $d): ?>
    <option value="<?php echo $d['id_jurusan'];?>"><?php echo $d['jurusan']; ?></option>
    <?php endforeach ?></td>
         </tr>
         <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
<td><input type="submit" name="search_submit"  value="Download" class="btn btn-primary">
</td>
        </tr>
        
       
        </table>
     </form>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                             <div class="modal fade" id="myModaljurexcel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                     <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">
                                          
<?php echo validation_errors();
    echo form_open('admin/export_absen_jurusan_excel'); ?>
                                  <table width="100%">

          <tr>
             <td height="32">Dari</td>
             <td>:</td>
             <td><input type="date" name="dari" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px" ></td>
         </tr>
         <p>
         <tr>
             <td height="32">Sampai</td>
             <td>:</td>
             <td><input type="date" name="sampai" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px"></td>
         </tr>
           <tr>
             <td height="32">Sekolah</td>
             <td>:</td>
             <td><select name="id_jurusan">
    <?php foreach ($dt_jurusan as $d): ?>
    <option value="<?php echo $d['id_jurusan'];?>"><?php echo $d['jurusan']; ?></option>
    <?php endforeach ?></td>
         </tr>
         <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
<td><input type="submit" name="search_submit"  value="Download" class="btn btn-primary">
</td>
        </tr>
        
       
        </table>
     </form>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                         <table class="table table-striped table-bordered table-hover" id="example1">

                                    <thead>
                                        <tr><th ><div align="center">No</div></th>
                                        <th ><div align="center">NIS</div></th>
                                        <th ><div align="center">Nama </div></th>
                                        <th ><div align="center">JK </div></th>
                                    
                                  <th ><div align="center">Sekolah</div></th>
                                        <th ><div align="center">Jurusan</div></th>
                                            <th ><div align="center">Tanggal</div></th>
                                        <th ><div align="center">Datang</div></th>
                                        <th ><div align="center">Pulang</div></th>
                                        <th ><div align="center">Status</div></th>
                                      
                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $no=1; ?>
                  <?php foreach($dt_absen as $d): ?>
                                        <tr >
                                            <td><div align="center"><?php echo $no++; ?></div></td>
                                           
                
                  <td><div align="center"><?php echo $d['nis']; ?> </div></td>
                  <td><div align="center"><?php echo $d['nama']; ?> </div></td>
                  <td><div align="center"><?php echo $d['jk']; ?> </div></td>
                
                 <td><div align="center"><?php echo $d['nama_sekolah']; ?>  </div></td>
                 <td><div align="center"><?php echo $d['jurusan']; ?>  </div></td>
                     <td><div align="center"><?php echo $d['tgl_absensi']; ?> </div></td>
                 <td><div align="center"><?php echo $d['jam_masuk']; ?>  </div></td>
                 <td><div align="center"><?php echo $d['jam_keluar']; ?>  </div></td>
                 <td><div align="center"><?php echo $d['status']; ?>  </div></td>
             
                
        
       
                                        
                                      </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                      </div>



            </div>
          </div>
        </div>
      </div>