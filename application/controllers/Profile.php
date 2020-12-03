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
		if($function == 'index') {
				$data				= $this->__getPagination($content, 'articles');
				$data['head'] 			= 'Artikel dan Berita';
				$data['content']		= 'Informasi artikel dan berita Litbang kabupaten Bombana.';
				$data['title']			= 'Artikel dan Berita';
				$data['link_map']	= [
					[
						'title'	=> 'beranda',
						'slug'	=> base_url()
					],
					[
						'title'	=> 'jurnal',
						'slug'	=> NULL
					],
					[
						'title'	=> 'artikel dan berita',
						'slug'	=> NULL
					],
				];
				$data['side_submenu']	= [
					[
						'title'	=> 'SOP Kelitbangan',
						'slug'	=> base_url('journal/sop-kelitbangan'),
						'total'	=> NULL
					],
					[
						'title'	=> 'RIK Kab. Bombana',
						'slug'	=> base_url('journal/rik-bombana'),
						'total' => NULL
					],
					[
						'title'	=> 'Agenda Kegiatan',
						'slug'	=> base_url('journal/agenda-kegiatan'),
						'total'	=> $this->Journal_model->getTotalData('agenda-kegiatan', 'articles')
					],
					[
						'title'	=> 'Rekomendasi',
						'slug'	=> base_url('journal/rekomendasi'),
						'total' => $this->Journal_model->getTotalData('rekomendasi', 'articles')
					]
				];
	
				return $data;
		}else if($function == 'detail') {
			$data['results']	= $this->Berita_model->getProfileData('articles', $level);
			$data['head'] 			= ($level != 'institution' ? strtoupper($level) : 'Institution').' Profile';
			$data['content']		= 'Information';
			$data['title']			= ($level != 'institution' ? strtoupper($level) : 'Institution').' Profile';
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