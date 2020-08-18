<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('anggotaModel');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['dataanggota'] = $this->anggotaModel->getAll();
		$data['hal'] = 'Anggota';
		$data['title'] = '<h2>Halaman Anggota</h2>';
		$this->template->backend('admin/pages/anggota/view_anggota', $data);
	}
}
