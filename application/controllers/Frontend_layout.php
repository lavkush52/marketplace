<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_layout extends CI_Controller
{

	public function index()
	{
		$this->commonLayout('layout/frontend/index');
	}

	public function commonLayout($data)
	{
		$this->load->view('layout/frontend/head');
		$this->load->view('layout/frontend/header');
		$this->load->view($data);
		$this->load->view('layout/frontend/footer');
	}
}
