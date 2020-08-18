<?php defined('BASEPATH') or exit('No direct script access allowed');

class anggotaModel extends CI_Model
{
	private $tbl_admin = 'tbl_anggota';

	public function getAll()
	{

		return	$this->db->get('tbl_anggota')->result();
	}
}
