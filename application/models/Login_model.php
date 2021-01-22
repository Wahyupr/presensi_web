<?php
class Login_model extends CI_Model{

    

     function auth_admin($nis,$password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('nis = "'.$nis.'" AND password=md5 ("'.$password.'") ');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
		}

 
 
}