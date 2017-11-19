<?php 
/**
* 
*/
class Databarang_model extends CI_Model
{
	public $admin			= 'admin';
	public $databarang		= 'databarang';
	public $id				= 'nama_barang';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->admin)->row();
	}

	function ambil_data()
	{
		$this->db->select('*');
        $this->db->from('databarang');
		$query = $this->db->get();
		return $query->result();
	}
	

	function tambah_data($data)//array
	{
		return $this->db->insert($this->databarang,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->databarang);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->databarang,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->databarang)->row();
	}
}
 ?>