<?php
class Template
{
	protected $_ci;

	public function __construct()
	{
		$this->_ci = &get_instance();
	}

	public function backend($content, $data = NULL)
	{

		$data['header'] = $this->_ci->load->view('admin/components/head', $data, TRUE);
		$data['topbar'] = $this->_ci->load->view('admin/components/topbar', $data, TRUE);
		$data['sidebar'] = $this->_ci->load->view('admin/components/sidebar', $data, TRUE);
		$data['content'] = $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] = $this->_ci->load->view('admin/components/footer', $data, TRUE);

		$this->_ci->load->view('admin/components/index', $data);
	}

	public function frontend($content, $data = NULL)
	{

		$data['header'] = $this->_ci->load->view('user/components/head', $data, TRUE);
		$data['content'] = $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] = $this->_ci->load->view('user/components/footer', $data, TRUE);

		$this->_ci->load->view('user/components/index', $data);
	}
}
