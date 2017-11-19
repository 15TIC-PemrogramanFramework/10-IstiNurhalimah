<?php 
/**
* 
*/
class Member_model extends CI_Model
{
	public $member			= 'member';
	public $id				= 'nama_member';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($nama_member,$password_member)
	{
		$this->db->where('nama_member',$nama_member);
		$this->db->where('password_member',$password_member);
		return $this->db->get($this->member)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->member)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->member,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->member);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->member,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->member)->row();
	}
}
 ?>