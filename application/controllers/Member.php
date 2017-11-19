<?php 
/**
* 
*/
class Member extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['member'] = $this->Member_model->ambil_data();
		$this->load->view('Admin/Member_list',$data);
	}

	function delete($id)
	{
		$this->Member_model->hapus_data($id);
		$this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('member');
	}

	function update($id)
	{
		$member = $this->Member_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Member/update_aksi'),
			'nama_member' 		=> set_value('nama_member',$member->nama_member),
			'password_member'	=> set_value('password_member',$member->password_member),
			'alamat_member'	 	=> set_value('alamat_member',$member->alamat_member),
			'notelp_member'	 	=> set_value('notelp_member',$member->notelp_member),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Member_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama_member' 		=> $this->input->post('nama_member'),
			'password_member' 	=> $this->input->post('password_member'),
			'alamat_member' 	=> $this->input->post('alamat_member'),
			'notelp_member' 	=> $this->input->post('notelp_member')
			);	
		$nama_member = $this->input->post('nama_member');
		$this->Member_model->edit_data($nama_member,$data);
		$this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
                redirect('member');
	}
}

 ?>