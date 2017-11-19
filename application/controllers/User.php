<?php
 
class User extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('User_model');
        $this->load->model('Member_model');
        $this->load->library('session');
 
}
 
public function index()
{
$this->load->view("Register.php");
}
 
public function register_user(){
 
      $user=array(
      'nama_member'=>$this->input->post('nama_member'),
      'password_member'=>$this->input->post('password_member'),
      'alamat_member'=>$this->input->post('alamat_member'),
      'notelp_member'=>$this->input->post('notelp_member')
        );
        $this->Member_model->tambah_data($user);
        redirect(site_url('User/login_view'));

}
 
public function login_view(){
 
$this->load->view("Loginmember.php");
 
}
 
function login_user(){
  $user_login=array(
 
  'nama_member'=>$this->input->post('nama_member'),
  'password_member'=>$this->input->post('password_member'),
 
    );
 
    $data=$this->User_model->login_user($user_login['nama_member'],$user_login['password_member']);
      if($data)
      {
        $this->session->set_userdata('id_member',$data['id_member']);
        $this->session->set_userdata('nama_member',$data['nama_member']);
        $this->session->set_userdata('password_member',$data['password_member']);
        $this->session->set_userdata('alamat_member',$data['alamat_member']);
        $this->session->set_userdata('notelp_member',$data['notelp_member']);
 
        $this->load->view('Homeuser.php');
 
      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view('Loginmember.php');
 
      }
}
 
function user_profile(){
 
$this->load->view('User_profile.php');
 
}
public function user_logout(){
 
  $this->session->sess_destroy();
  redirect('User/login_view', 'refresh');
}
 
}
 
?>