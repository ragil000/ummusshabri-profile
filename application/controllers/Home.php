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
			$head = '';
			if($level != 'foundation') {
				if($level == 'ece') {
					$head = 'Welcome to Early Childhood Education of Ummusshabri Kendari';
				}else {
					$level_long = '';
					if($level == 'mi') {
						$level_long = 'Elementary School of Ummusshabri';
					}else if($level == 'mts') {
						$level_long = 'Junior High School of Ummusshabri';
					}else if($level == 'ma') {
						$level_long = 'Senior High School of Ummusshabri';
					}
					$head = 'Welcome to '.$level_long.' of Ummusshabri Kendari.';
				}
			}else {
				$head = 'Welcome to Ummusshabri Kendari Foundation.';
			}

			$data['levelLink'] = $level.'/';
			$data['head']			= $head;
			$data['content']		= 'Sholih, Islamist, Populist, Accomplished, Socialist';
			$data['popular_news'] 	= $this->Berita_model->getPopularNews(5, $level);
			$data['new_news'] 		= $this->Berita_model->getNewNews(3, $level);
			$data['logo']			= true;
			$data['level_home']			= true;
			$data['galeries']	= $this->Berita_model->getGalery(6, $level);
			$data['isi'] = $this->load->view('pages/baru/beranda-level', $data, true);
		}else {
			$data['head']			= 'Welcome to Integrated Islamic School of Ummusshabri Foundation.';
			$data['content']		= 'Sholih, Islamist, Populist, Accomplished, Socialist';
			$data['popular_news'] 	= $this->Berita_model->getPopularNews(5);
			$data['new_news'] 		= $this->Berita_model->getNewNews(3);
			$data['logo']			= true;
			$data['isi'] = $this->load->view('pages/baru/beranda', $data, true);
		}
		$data['header'] = $this->load->view('templates2/header', $data, true);
		$this->load->view('templates2/index', $data);
	}
}