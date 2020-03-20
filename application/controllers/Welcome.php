<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller

{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("product_model");
		$this->load->model("galeri_model");
	}
	public function index()
	{
		$data["tb_makanan"] = $this->product_model->getAll();
		$data["tb_galeri"] = $this->galeri_model->getAll(); // ambil data dari model
		$this->load->view('user/user', $data);
	}

	public function about()
	{
		$this->load->view('about.php');
	}

	public function contact()
	{
		$this->load->view('contact.php');
	}
}
