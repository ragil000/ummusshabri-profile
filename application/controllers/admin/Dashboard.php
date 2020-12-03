<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION['auth_login'])) {
			redirect('admin/Auth');
		}
		$this->load->model('admin/All_model');
	}

	public function index($content = 'dashboard')
	{
		$data['news'] = $this->All_model->getNews();
		$data['galery'] = $this->All_model->getGalery();
		$data['views'] = $this->All_model->getViews();
		$data['head']		= 'Dashboard';
		$data['content']	= 'Dashboard.';
		$data['title']		= 'Dashboard';
		$data['script']		= 'admin/'.$content.'.js';
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/pages/'.$content);
		$this->load->view('admin/templates/footer');
	}

}
