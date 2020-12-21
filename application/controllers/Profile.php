<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Berita_model');
	}

	public function detail($level) {
		$data					= $this->__getContentData($level, 'detail');
		$data['popular_news'] 		= $this->Berita_model->getPopularNews(5);
		$data['detail']	= true;

		if($level != null){
			$data['levelLink'] = $level.'/';
		}
		// $data['header'] = $this->load->view('templates2/header', $data, true);
		$data['isi'] = $this->load->view('pages/profile/detail', $data, true);
		$this->load->view('templates2/index', $data);
	}

	protected function __getContentData($level = NULL, $function = 'index', $slug = NULL) {
		if($function == 'detail') {
			$data['results']	= $this->Berita_model->getProfileData('articles', $level);
			$data['head'] 			= ($level != 'foundation' ? strtoupper($level) : 'Ummusshanri Kendari Foundation').' Profile';
			$data['content']		= 'Information';
			$data['title']			= ($level != 'foundation' ? strtoupper($level) : 'Ummusshanri Kendari Foundation').' Profile';
			$data['link_map']	= [
				[
					'title'	=> 'home',
					'slug'	=> base_url()
				],
				[
					'title'	=> 'profile',
					'slug'	=> $level ? base_url($level.'/news') : base_url('news')
				],
				[
					'title'	=> $level,
					'slug'	=> NULL
				]
			];

			return $data;
		}
	}

}