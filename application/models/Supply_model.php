<?php 
/**
* 
*/
class Supply_model extends CI_Model
{
	public $supply			= 'supply';
	public $id				= 'id_supply';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('*');
        $this->db->from('supply');
		$query = $this->db->get();
		return $query->result();
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->supply,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->supply);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->supply,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->supply)->row();
	}
}
 ?>