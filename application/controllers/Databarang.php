<?php 
/**
* 
*/
class Databarang extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Databarang_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['databarang'] = $this->Databarang_model->ambil_data();
		$this->load->view('Admin/Databarang_list',$data);
	}

	function indexmember($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['databarang'] = $this->Databarang_model->ambil_data();
		$this->load->view('Welcome/gallery',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('Databarang/tambah_aksi'),
			'nama_barang' 		=> set_value('nama_barang'),
			'harga_barang' 		=> set_value('harga_barang'),
			'stok_barang'		=> set_value('stok_barang'),
			'button' 			=> 'Tambah'
			);
		$this->load->view('Admin/Databarang_form',$data);
	}

	function tambah_aksi()
	{
                $data = array(
                'nama_barang' 		=> $this->input->post('nama_barang'),
				'harga_barang' 		=> $this->input->post('harga_barang'),
				'stok_barang' 		=> $this->input->post('stok_barang')                 
                );
                $this->Databarang_model->tambah_data($data); //akses model untuk menyimpan ke database
                $this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('databarang'); //jika berhasil maka akan ditampilkan view upload
        }

	function delete($id)
	{
		$this->Databarang_model->hapus_data($id);
		$this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('databarang');
	}

	function update($id)
	{
		$databarang = $this->Databarang_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Databarang/update_aksi'),
			'nama_barang' 	=> set_value('nama_barang',$databarang->nama_barang),
			'harga_barang'	=> set_value('harga_barang',$databarang->harga_barang),
			'stok_barang'	=> set_value('stok_barang',$databarang->stok_barang),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Databarang_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama_barang' 		=> $this->input->post('nama_barang'),
			'harga_barang' 		=> $this->input->post('harga_barang'),
			'stok_barang' 		=> $this->input->post('stok_barang')
			);	
		$nama_barang = $this->input->post('nama_barang');
		$this->Databarang_model->edit_data($nama_barang,$data);
		$this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
                redirect('databarang');
	}
}

 ?>