<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_layout extends CI_Controller
{

	public function index()
	{
		$this->load->view('layout/frontend/head');
		$this->load->view('layout/frontend/header');
		$this->load->view('layout/frontend/index');
		$this->load->view('layout/frontend/footer');
	}
}
