<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminModel');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['dataadmin'] = $this->adminModel->getAll();
		$data['hal'] = 'Administrator';
		$data['title'] = 'Halaman Administrator';
		$this->template->backend('admin/pages/admin/view_admin', $data);
	}
}
