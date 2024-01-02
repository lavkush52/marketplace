<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layout extends CI_Controller
{

	public function switcher()
	{
		$this->load->view('layout/backend/common/switcher');
	}
}
