<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Home';
		$data['hal'] = 'Home';
		$this->template->backend('admin/home', $data);
	}
}
