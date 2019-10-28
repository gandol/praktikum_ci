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
		foreach($data as $toko){
			echo $toko->nama_toko."<br>";
		}
		// $this->load->view('welcome_message');
	}
	public function say(){
		$this->load->view('nama_saya');
	}
}
