<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Beli_model');
		$this->load->model('Databarang_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $this->load->view('Loginmember');	}

    public function home()
    {
   	$this->load->view('Homeuser');
    }

    public function gallery()
	{
	$data['databarang'] = $this->Databarang_model->ambil_data();
    $this->load->view('User/Databarang_list', $data);	}

    public function beli()
	{
   	$data['beli'] = $this->Beli_model->ambil_data();
   	$this->load->view('User/Beli_list',$data);
}
    public function logout()
	{
    $this->load->view('Loginmember');	}

    public function logoutadmin()
	{
    $this->load->view('Login');	}

    public function deletebeli()
	{
	$data['beli'] = $this->Beli_model->ambil_data();
    $this->load->view('User/Beli_list', $data);	}

    public function updatebeli()
	{
	$data['beli'] = $this->Beli_model->ambil_data();
    $this->load->view('User/Beli_list', $data);	}
}