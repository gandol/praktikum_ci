<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('model_pertama');
	}

	public function index()
	{
		$data = $this->model_pertama->getdata();
		$var_kirim =([
			'data_toko_kirim' => $data
		]);
		
		//templating
		$this->load->view('header');
		$this->load->view('welcome_message',$var_kirim);
		$this->load->view('footer');
	}
	public function masuk(){
		$this->load->view('header');
		$this->load->view('form_login');
		$this->load->view('footer');
	}

	public function aksi_masuk(){
		$email = $this->input->post('email');
	}

	public function registrasi(){
		$this->load->view('header');
		$this->load->view('form_regis');
		$this->load->view('footer');
	}
}
