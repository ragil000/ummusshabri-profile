<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Berita_model');
	}

	public function index($level = NULL)
	{
		if($level){
			$data['levelLink'] = $level.'/';
			$data['head']			= 'Welcome to '.($level != 'institution' ? strtoupper($level) : 'Institution').' of Ummusabri Institution.';
			$data['content']		= 'Sholih, Islamist, Populist, Archievers, Socialist & Environmentally Friendly';
			$data['popular_news'] 	= $this->Berita_model->getPopularNews(5, $level);
			$data['new_news'] 		= $this->Berita_model->getNewNews(3, $level);
			$data['logo']			= true;
			$data['level_home']			= true;
			$data['galeries']	= $this->Berita_model->getGalery(6, $level);
			$data['isi'] = $this->load->view('pages/baru/beranda-level', $data, true);
		}else {
			$data['head']			= 'Welcome to Integrated Islamic School of Ummusabri Institution.';
			$data['content']		= 'Sholih, Islamist, Populist, Archievers, Socialist & Environmentally Friendly';
			$data['popular_news'] 	= $this->Berita_model->getPopularNews(5);
			$data['new_news'] 		= $this->Berita_model->getNewNews(3);
			$data['logo']			= true;
			$data['isi'] = $this->load->view('pages/baru/beranda', $data, true);
		}
		$data['header'] = $this->load->view('templates2/header', $data, true);
		$this->load->view('templates2/index', $data);
	}
}
