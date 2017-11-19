<?php 
/**
* 
*/
class Beli extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Beli_model');
	}

	function index()
	{
		$data['beli'] = $this->Beli_model->ambil_data();
		$this->load->view('Admin/Beli_list',$data);
	}

	function delete($id)
	{
		$this->Beli_model->hapus_data($id);
		$this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('beli');
	}

	function update($id)
	{
		$beli = $this->Beli_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Beli/update_aksi'),
			'id_beli' 			=> set_value('id_beli',$beli->id_beli),
			'id_member' 		=> set_value('id_member',$beli->id_member),
			'nama_member' 		=> set_value('nama_member',$beli->nama_member),
			'nama_barang' 		=> set_value('nama_barang',$beli->nama_barang),
			'jumlah_beli' 		=> set_value('jumlah_beli',$beli->jumlah_beli),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Beli_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'jumlah_beli' 		=> $this->input->post('jumlah_beli')
			);	
		$id_beli = $this->input->post('id_beli');
		$this->beli_model->edit_data($id_beli,$data);
		$this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('beli');
	}

	//member
	function indexmember()
	{
		$data['beli'] = $this->Beli_model->ambil_data();
		$this->load->view('User/Beli_list',$data);
	}
	function deletebeli($id_beli)
	{
		$this->Beli_model->hapus_data($id_beli);
		$this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('Welcome/deletebeli');
	}
	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('Beli/tambah_aksi'),
			'id_beli' 			=> set_value('id_beli'),
			'id_member' 		=> set_value('id_member'),
			'nama_barang'	 	=> set_value('nama_barang'),
			'nama_member'	 	=> set_value('nama_member'),
			'jumlah_beli'	 	=> set_value('jumlah_beli'),
			'button' 			=> 'Tambah'
			);
		$this->load->view('User/Beli_form',$data);
	}

	function tambah_aksi()
	{
                $data = array(
                'id_beli' 			=> $this->input->post('id_beli'),
				'nama_barang' 		=> $this->input->post('nama_barang'),
				'nama_member' 		=> $this->input->post('nama_member'),
				'jumlah_beli' 		=> $this->input->post('jumlah_beli')                
                );
                $this->Beli_model->tambah_data($data); //akses model untuk menyimpan ke database
                $this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('Beli/indexmember'); //jika berhasil maka akan ditampilkan view upload
        }

	

	function updatebeli($id)
	{
		$beli = $this->Beli_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Beli/updatebeli_aksi'),
			'id_beli' 			=> set_value('id_beli',$beli->id_beli),
			'nama_member' 		=> set_value('nama_member',$beli->nama_member),
			'nama_barang' 		=> set_value('nama_barang',$beli->nama_barang),
			'jumlah_beli' 		=> set_value('jumlah_beli',$beli->jumlah_beli),
			'button' 			=> 'Update'
			);
		$this->load->view('User/Beli_form',$data);		
	}

	function updatebeli_aksi()
	{
		$data = array(
			'jumlah_beli' 		=> $this->input->post('jumlah_beli')
			);	
		$id_beli = $this->input->post('id_beli');
		$this->Beli_model->edit_data($id_beli,$data);
		$this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('Welcome/updatebeli');
	}
}
 ?>