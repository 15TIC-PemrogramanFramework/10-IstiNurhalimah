<?php 
/**
* 
*/
class Beli_model extends CI_Model
{
	public $beli		= 'beli';
	public $id			= 'id_beli';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('*');
        $this->db->from('beli');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->beli,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->beli)->row();//1 data
	}
	function hapus_data($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->delete($this->beli);
	}
	function tambah_data($data)
	{
		return $this->db->insert($this->beli,$data);
	}
}
 ?>