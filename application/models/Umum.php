<?php
	//----------------- CLASS MODELS -----------------------------
class Umum extends CI_model{
	
function get_data($tabel)
	{
		$query = $this->db->get($tabel);
		return $query->result_array();		
	}
	function set_data($tabel)
	{
		$data=$this->input->post(null,TRUE);
		array_pop($data);
		return $this->db->insert($tabel, $data);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus($tabel,$kolom,$id)
	{
		$this->db->delete($tabel,array($kolom => $id));
	}	
	public function UpdateData($tabelName, $data, $where){
		$res = $this->db->update($tabelName, $data, $where);
		return $res;
	}
	function get_report_absen($dari,$sampai,$id_user)
	{
		$this->db->select('*');
		$this->db->from('kehadiran');
		$this->db->join('user','user.id_user=kehadiran.id_user','');
		$this->db->join('sekolah','sekolah.id_sekolah=user.id_sekolah','');
		$this->db->join('jurusan','jurusan.id_jurusan=user.id_jurusan','');	
		$this->db->where('tgl_absensi BETWEEN "'.$dari.'" AND "'.$sampai.'" and kehadiran.id_user="'.$id_user.'"');
		$query = $this->db->get();
		return $query->result_array();
	}
		
	function get_report_absen_sekolah($dari,$sampai,$id_sekolah)
	{
		$this->db->select('*');
		$this->db->from('kehadiran');
		$this->db->join('user','user.id_user=kehadiran.id_user','');
		$this->db->join('sekolah','sekolah.id_sekolah=user.id_sekolah','');
		$this->db->join('jurusan','jurusan.id_jurusan=user.id_jurusan','');	
		$this->db->where('tgl_absensi BETWEEN "'.$dari.'" AND "'.$sampai.'" and user.id_sekolah="'.$id_sekolah.'"');
		$query = $this->db->get();
		return $query->result_array();
	}
	function get_report_absen_jurusan($dari,$sampai,$id_jurusan)
	{
		$this->db->select('*');
		$this->db->from('kehadiran');
		$this->db->join('user','user.id_user=kehadiran.id_user','');
		$this->db->join('sekolah','sekolah.id_sekolah=user.id_sekolah','');
		$this->db->join('jurusan','jurusan.id_jurusan=user.id_jurusan','');	
		$this->db->where('tgl_absensi BETWEEN "'.$dari.'" AND "'.$sampai.'" and user.id_jurusan="'.$id_jurusan.'"');
		$query = $this->db->get();
		return $query->result_array();
	}
		function ambil_absensi()
	{		
		$a=date('Y-m-d');
		$this->db->select('*');
		$this->db->from('kehadiran');
		$this->db->join('user','kehadiran.id_user=user.id_user','');
		$this->db->where('tgl_absensi',$a);				
		$query = $this->db->get();
		return $query->result_array();
	}
	function ambil_absen()
	{		

		$this->db->select('*');
		$this->db->from('kehadiran');
		$this->db->join('user','user.id_user=kehadiran.id_user','');	
		$this->db->join('sekolah','sekolah.id_sekolah=user.id_sekolah','');
		$this->db->join('jurusan','jurusan.id_jurusan=user.id_jurusan','');		
		$query = $this->db->get();
		return $query->result_array();
	}
	function ambil_user()
	{		
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('sekolah','sekolah.id_sekolah=user.id_sekolah','');
		$this->db->join('jurusan','jurusan.id_jurusan=user.id_jurusan','');
		$this->db->where('akses !=1 ');				
		$query = $this->db->get();
		return $query->result_array();
	}
		function ambil_qrcode()
	{		
		$this->db->select('qrcode');
		$this->db->from('qrcode');
			
		$query = $this->db->get();
		return $query->result_array();
	}
	 function update_user($id = FALSE)
	{
		if($id == FALSE){
			$query = $this->db->get('user');
			return $query->result_array();
		}	

		$query = $this->db->get_where('user', array('id_user' => $id));
        return $query->row_array();
	}
	 function update_absen($id = FALSE)
	{
		if($id == FALSE){
			$query = $this->db->get('kehadiran');
			return $query->result_array();
		}	

		$query = $this->db->get_where('kehadiran', array('id_absen' => $id));
        return $query->row_array();
	}
		 function update_sekolah($id = FALSE)
	{
		if($id == FALSE){
			$query = $this->db->get('sekolah');
			return $query->result_array();
		}	

		$query = $this->db->get_where('sekolah', array('id_sekolah' => $id));
        return $query->row_array();
	}
	 function update_jurusan($id = FALSE)
	{
		if($id == FALSE){
			$query = $this->db->get('jurusan');
			return $query->result_array();
		}	

		$query = $this->db->get_where('jurusan', array('id_jurusan' => $id));
        return $query->row_array();
	}



	
}