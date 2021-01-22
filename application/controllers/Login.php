<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
        $this->load->view('index');
    }
 
    function auth(){
        $nis=htmlspecialchars($this->input->post('nis',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        $cek_admin=$this->login_model->auth_admin($nis,$password);
        if($cek_admin->num_rows() > 0){ //jika login sebagai admin
                        $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['akses']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                     $this->session->set_userdata('ses_id',$data['nis']);
                                      $this->session->set_userdata('nama',$data['nama']); 
                    redirect('admin/index'); 
 }else if($data['akses']=='1'){ //Akses SKPD
                    $this->session->set_userdata('akses','2');
                       $this->session->set_userdata('ses_id',$data['nis']);
                            $this->session->set_userdata('nama',$data['nama']); 
                    redirect('skpd/index');
                 }
        }
        else {
            echo "<script>alert('Username atau password salah');</script>";
            redirect('login/index','refresh');
        }
    }
    
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}

 