   <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="pkl.akakom.ac.id" class="font-weight-bold ml-1" target="_blank">PKL STMIK AKAKOM YOGYAKARTA</a>
            </div>
          </div>
          
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url();?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            // data-tables
            $('#example1').DataTable();
                    
            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        } );        
    </script>
  <script src="<?php echo base_url();?>assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url();?>assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
