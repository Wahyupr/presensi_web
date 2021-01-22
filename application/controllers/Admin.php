<?php

class Admin extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->database();
   
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }
  public function export_absen_tgl(){
			$dari = $this->input->post('dari');
			$sampai = $this->input->post('sampai');
			$id_user = $this->input->post('id_user');
			$data['dt_search']=$this->umum->get_report_absen($dari,$sampai,$id_user); 
			$this->load->view('admin/export_absen_tgl', $data);
  }
  public function export_absen_tgl_excel(){
			$dari = $this->input->post('dari');
			$sampai = $this->input->post('sampai');
			$id_user = $this->input->post('id_user');
			$data['dt_search']=$this->umum->get_report_absen($dari,$sampai,$id_user); 
			$this->load->view('admin/export_absen_tgl_excel', $data);
  }
    public function export_absen_sekolah_pdf(){
			$dari = $this->input->post('dari');
			$sampai = $this->input->post('sampai');
			$id_sekolah = $this->input->post('id_sekolah');
			$data['dt_search']=$this->umum->get_report_absen_sekolah($dari,$sampai,$id_sekolah); 
			$this->load->view('admin/export_absen_sekolah_pdf', $data);
  }
   public function export_absen_sekolah_excel(){
			$dari = $this->input->post('dari');
			$sampai = $this->input->post('sampai');
			$id_sekolah = $this->input->post('id_sekolah');
			$data['dt_search']=$this->umum->get_report_absen_sekolah($dari,$sampai,$id_sekolah); 
			$this->load->view('admin/export_absen_sekolah_excel', $data);
  }

   public function export_absen_jurusan_pdf(){
			$dari = $this->input->post('dari');
			$sampai = $this->input->post('sampai');
			$id_jurusan = $this->input->post('id_jurusan');
			$data['dt_search']=$this->umum->get_report_absen_jurusan($dari,$sampai,$id_jurusan); 
			$this->load->view('admin/export_absen_jurusan_pdf', $data);
  }
   public function export_absen_jurusan_excel(){
			$dari = $this->input->post('dari');
			$sampai = $this->input->post('sampai');
			$id_jurusan = $this->input->post('id_jurusan');
			$data['dt_search']=$this->umum->get_report_absen_jurusan($dari,$sampai,$id_jurusan); 
			$this->load->view('admin/export_absen_jurusan_excel', $data);
  }
function report() { 
	$data['page']="report_absen";
	$data['dt_absen']=$this->umum->ambil_absen();
		$data['dt_user']=$this->umum->get_data('user');
		$data['dt_sekolah']=$this->umum->get_data('sekolah');
		$data['dt_jurusan']=$this->umum->get_data('jurusan');
	$this->tampilkan($data);
	}
	function sekolah() { 
	$data['page']="sekolah";
	$data['dt_sekolah']=$this->umum->get_data('sekolah');
	$this->tampilkan($data);
	}
	function add_sekolah() { 
	$data['page']="add_sekolah";

	$this->tampilkan($data);
	}
	function tambah_sekolah()
	{
	
	$nama_sekolah = $this->input->post('nama_sekolah');
	$alamat_sekolah = $this->input->post('alamat_sekolah');
	$jurusan = $this->input->post('jurusan');
	$email = $this->input->post('email');
	$telp = $this->input->post('telp');
	$data = array(
		
			'nama_sekolah' => $nama_sekolah,
			'alamat_sekolah' => $alamat_sekolah,
			'email' => $email,
			'telp' => $telp
			);
	echo "<script>alert('Tambah Data Berhasil');</script>";
	$this->umum->input_data($data,'sekolah');
	redirect('admin/sekolah','refresh');
	}
		function edit_sekolah($id=NULL) { 
	$data['page']="edit_sekolah";
	$data['d']=$this->umum->update_sekolah($id);
	$this->tampilkan($data);
}
function update_sekolah(){
	$id_sekolah = $this->input->post('id_sekolah');
	$nama_sekolah = $this->input->post('nama_sekolah');
	$alamat_sekolah = $this->input->post('alamat_sekolah');
	$email = $this->input->post('email');
	$telp = $this->input->post('telp');
	
			$data_update = array (
			'id_sekolah' => $id_sekolah,
			'email' => $email,
			'alamat_sekolah' => $alamat_sekolah,
			'telp' => $telp,
			'nama_sekolah' => $nama_sekolah
		);
		$where = array('id_sekolah' => $id_sekolah);
		$res = $this->umum->UpdateData('sekolah', $data_update, $where);
		if($res>=1){
			redirect('admin/sekolah');
		}else{
			echo "<h1>GAGAL</h1>";
		}
	}
	function jurusan() { 
	$data['page']="jurusan";
	$data['dt_jurusan']=$this->umum->get_data('jurusan');
	$this->tampilkan($data);
	}
	function add_jurusan() { 
	$data['page']="add_jurusan";

	$this->tampilkan($data);
	}
	function tambah_jurusan()
	{
	
	$jurusan = $this->input->post('jurusan');
	$kelas = $this->input->post('kelas');
	
	$data = array(
		
			'jurusan' => $jurusan,
			'kelas' => $kelas
			);
	echo "<script>alert('Tambah Data Berhasil');</script>";
	$this->umum->input_data($data,'jurusan');
	redirect('admin/jurusan','refresh');
	}
		function edit_jurusan($id=NULL) { 
	$data['page']="edit_jurusan";
	$data['d']=$this->umum->update_jurusan($id);
	$this->tampilkan($data);
}
function update_jurusan(){
	$id_jurusan = $this->input->post('id_jurusan');
	$jurusan = $this->input->post('jurusan');
	$kelas = $this->input->post('kelas');
	
	
			$data_update = array (
			'id_jurusan' => $id_jurusan,
			
			'kelas' => $kelas
			
		);
		$where = array('id_jurusan' => $id_jurusan);
		$res = $this->umum->UpdateData('jurusan', $data_update, $where);
		if($res>=1){
			redirect('admin/jurusan');
		}else{
			echo "<h1>GAGAL</h1>";
		}
	}
	function absen() { 
	$data['page']="absen";
	$data['dt_absen']=$this->umum->ambil_absen();
	$this->tampilkan($data);
	}
	function add_absen() { 
	$data['page']="add_absen";
	$data['dt_user']=$this->umum->get_data('user');
	$this->tampilkan($data);
	}
	function tambah_absen()
	{
	$id_user = $this->input->post('id_user');
	$tgl_absensi = $this->input->post('tgl_absensi');
	$jam_masuk = $this->input->post('jam_masuk');
	$jam_keluar = $this->input->post('jam_keluar');
	$status = $this->input->post('status');
	$data = array(
			'id_user' => $id_user,
			'tgl_absensi' => $tgl_absensi,
			'jam_masuk' => $jam_masuk,
			'jam_keluar' => $jam_keluar,
			'status' => $status
			);
	echo "<script>alert('Tambah Data Berhasil');</script>";
	$this->umum->input_data($data,'kehadiran');
	redirect('admin/absen','refresh');
	}

	function edit_absen($id=NULL) { 
	$data['page']="edit_absen";
	$data['dt_user']=$this->umum->get_data('user');
	$data['d']=$this->umum->update_absen($id);
	$this->tampilkan($data);
}
function update_absen(){
	$id_absen = $this->input->post('id_absen');
	$tgl_absensi = $this->input->post('tgl_absensi');
	$jam_masuk = $this->input->post('jam_masuk');
	$jam_keluar = $this->input->post('jam_keluar');
	$status = $this->input->post('status');
	
			$data_update = array (
			'id_absen' => $id_absen,
			'jam_keluar' => $jam_keluar,
			'jam_masuk' => $jam_masuk,
			'status' => $status,
			'tgl_absensi' => $tgl_absensi
		);
		$where = array('id_absen' => $id_absen);
		$res = $this->umum->UpdateData('kehadiran', $data_update, $where);
		if($res>=1){
			redirect('admin/absen');
		}else{
			echo "<h1>GAGAL</h1>";
		}
	}

	function user() { 
	$data['page']="user";
	$data['dt_user']=$this->umum->ambil_user();
	$this->tampilkan($data);
	}
		function qrcode() { 
	$data['page']="qrcode";
	 $this->load->library('ciqrcode');

 header("Content-Type: image/png");
 $query=$this->db->query("Select qrcode as qrcode from qrcode");
                                                        foreach ($query->result() as $row)
                                                        {
$qrcode=$row->qrcode;
                                                        }
 $data['data'] = $qrcode;
$data['size'] = 10;
 $this->ciqrcode->generate($data);

	}
	function add_user() { 
	$data['page']="add_user";
	$data['dt_sekolah']=$this->umum->get_data('sekolah');
	$data['dt_jurusan']=$this->umum->get_data('jurusan');
	
	$this->tampilkan($data);
	}
	 function tambah_user()
	{
	$nama = $this->input->post('nama');
	$nis = $this->input->post('nis');

	$id_sekolah = $this->input->post('id_sekolah');
	$jk = $this->input->post('jk');
	$id_jurusan = $this->input->post('id_jurusan');
	
	$password = md5($this->input->post('password'));
	$data = array(
			'nama' => $nama,
			'nis' => $nis,
		
			'id_sekolah' => $id_sekolah,
			'jk' => $jk,
			'id_jurusan' => $id_jurusan,
		
			'password' => $password
			);
	echo "<script>alert('Tambah Data Berhasil');</script>";
	$this->umum->input_data($data,'user');
	redirect('admin/user','refresh');
	}

	function edit_user($id=NULL) { 
	$data['page']="edit_user";
		$data['dt_sekolah']=$this->umum->get_data('sekolah');
	$data['dt_jurusan']=$this->umum->get_data('jurusan');
	$data['d']=$this->umum->update_user($id);
	$this->tampilkan($data);
}
function update_user(){
	$id_user = $this->input->post('id_user');
	$nama = $this->input->post('nama');

$id_sekolah = $this->input->post('id_sekolah');
$id_jurusan = $this->input->post('id_jurusan');
$jk = $this->input->post('jk');
	
	$nis = $this->input->post('nis');
	$password = md5($this->input->post('password'));
	
			$data_update = array (
			'id_user' => $id_user,
		
			'nis' => $nis,
			'id_sekolah' => $id_sekolah,
			'jk' => $jk,
			'id_jurusan' => $id_jurusan,
			
			'password' => $password,
			'nama' => $nama
		);
		$where = array('id_user' => $id_user);
		$res = $this->umum->UpdateData('user', $data_update, $where);
		if($res>=1){
			redirect('admin/user');
		}else{
			echo "<h1>GAGAL</h1>";
		}
	}


	function delete_user($id=NULL)
	{
		$this->umum->hapus('user','id_user',$id);
		redirect('admin/user');
	}
	function delete_absen($id=NULL)
	{
		$this->umum->hapus('kehadiran','id_absen',$id);
		redirect('admin/absen');
	}
		function delete_sekolah($id=NULL)
	{
		$this->umum->hapus('sekolah','id_sekolah',$id);
		redirect('admin/sekolah');
	}
		function delete_jurusan($id=NULL)
	{
		$this->umum->hapus('jurusan','id_jurusan',$id);
		redirect('admin/jurusan');
	}

	function index() { 
		if($this->session->userdata('akses')=='1') {
	$data['page']="home";
	$data['dt_absen']=$this->umum->ambil_absensi();

$this->tampilkan($data);
	
	}
		else {  echo "Anda tidak berhak mengakses halaman ini";
    }	
	}

	function tampilkan($data) { 
	$this->load->view('admin/header');
	$this->load->view('admin/tampil',$data);
	$this->load->view('admin/footer');
	}

	
}
