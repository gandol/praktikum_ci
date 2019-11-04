<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_pertama');
	}

	public function index()
	{
		// print_r($this->mode_pertama->ambilData());
		$data = $this->model_pertama->getdata();
		$var_kirim =([
			'data_toko_kirim' => $data
		]);
		
		//templating
		$this->load->view('header');
		$this->load->view('welcome_message',$var_kirim);
		$this->load->view('footer');
	}
	public function say(){
		$this->load->view('nama_saya');
	}
}
