<?php defined('BASEPATH') or exit('No direct script access allowed');

class adminModel extends CI_Model
{
	private $tbl_admin = 'tbl_admin';

	public function getAll()
	{

		return	$this->db->get('tbl_admin')->result();
	}
}
