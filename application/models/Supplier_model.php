<?php 
/**
* 
*/
class Supplier_model extends CI_Model
{
	public $supplier		= 'supplier';
	public $id				= 'nama_supplier';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('*');
        $this->db->from('supplier');
		$query = $this->db->get();
		return $query->result();
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->supplier,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->supplier);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->supplier,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->supplier)->row();
	}
}
 ?>