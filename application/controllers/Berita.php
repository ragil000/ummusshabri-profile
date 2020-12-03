<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Berita_model');
	}

	public function index($level = NULL)	{
		$data					= $this->__getContentData($level, 'index');
		$data['popular_news']	= $this->Berita_model->getPopularNews(5);
		$data['popular_news_level']	= $this->Berita_model->getPopularNews(5, $level);
		$data['detail']	= true;

		if($level){
			$data['levelLink'] = $level.'/';
		}

		// $data['header'] = $this->load->view('templates2/header', $data, true);
		$data['isi'] = $this->load->view('pages/news/news', $data, true);
		$this->load->view('templates2/index', $data);
	}

	public function detail($level = NULL, $slug) {
		$data					= $this->__getContentData($level, 'detail', $slug);
		$data['random_news'] 		= $this->Berita_model->getRandomNews(3);
		$data['detail']	= true;

		if($level){
			$data['levelLink'] = $level.'/';
		}
		// $data['header'] = $this->load->view('templates2/header', $data, true);
		$data['isi'] = $this->load->view('pages/news/detail', $data, true);
		$this->load->view('templates2/index', $data);
	}

	protected function __getContentData($level = NULL, $function = 'index', $slug = NULL) {
		if($function == 'index') {
				$data				= $this->__getPagination($level, 'articles');
				$data['head'] 			= 'News';
				$data['content']		= 'Information.';
				$data['title']			= 'News';
				$data['link_map']	= [
					[
						'title'	=> 'home',
						'slug'	=> $level ? base_url($level) : base_url()
					],
					[
						'title'	=> 'news',
						'slug'	=> NULL
					]
				];
	
				return $data;
		}else if($function == 'detail') {
			$data['results']	= $this->Berita_model->getDetailData('articles', $slug);
			$data['head'] 			= 'News Detail';
			$data['content']		= 'Information';
			$data['title']			= 'News Detail';
			$data['link_map']	= [
				[
					'title'	=> 'home',
					'slug'	=> base_url()
				],
				[
					'title'	=> 'news',
					'slug'	=> $level ? base_url($level.'/news') : base_url('news')
				],
				[
					'title'	=> 'detail',
					'slug'	=> NULL
				]
			];

			return $data;
		}
	}

	protected function __getPagination($level, $table, $per_page = 10) {
		// Pagination confoguration
		$config['base_url'] 	= base_url($level.'/news/'); //site url
		$config['total_rows'] 	= $this->Berita_model->getTotalData($table, 'news', $level); //total row
		$config['per_page'] 	= $per_page;  //show record per halaman
		$config["uri_segment"] 	= 3;  // uri parameter
		$choice 				= $config["total_rows"] / $config["per_page"];
		$config["num_links"] 	= floor($choice);

		// Create pagination style for BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = '<i class="icofont-rounded-right"></i>';
		$config['prev_link']        = '<i class="icofont-rounded-left"></i>';
		$config['full_tag_open']    = '<ul class="justify-content-center">';
		$config['full_tag_close']   = '</ul>';
		$config['num_tag_open']     = '<li>';
		$config['num_tag_close']    = '</li>';
		$config['cur_tag_open']     = '<li class="active"><a href="#">';
		$config['cur_tag_close']    = '</a></li>';
		$config['next_tag_open']    = '<li>';
		$config['next_tagl_close']  = '</li>';
		$config['prev_tag_open']    = '<li>';
		$config['prev_tagl_close']  = '</li>';
		$config['first_tag_open']   = '<li>';
		$config['first_tagl_close'] = '</li>';
		$config['last_tag_open']    = '<li>';
		$config['last_tagl_close']  = '</li>';
		$this->pagination->initialize($config);

		$data['page'] 				= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] 			= $this->Berita_model->getContentData($table, 'news', $config["per_page"], $data['page'], $level);           
	
		$data['pagination'] 		= $this->pagination->create_links();

		return $data;
	}

}
