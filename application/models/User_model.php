<?php
class User_model extends CI_model{
 public function register_user($user){
 
 
$this->db->insert('member', $user);
 
}
 public function login_user($nama_member,$password_member){
 
  $this->db->select('*');
  $this->db->from('member');
  $this->db->where('nama_member',$nama_member);
  $this->db->where('password_member',$password_member);
 
  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }
 
 
}

}
 
 
?>