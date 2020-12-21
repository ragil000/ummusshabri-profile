<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/Auth_model');
    }
    
    public function index() {
        $this->load->view('admin/pages/login');
    }

    public function login() {
        $email      = $this->input->post('email');
        $password   = md5($this->input->post('password'));

        $check      = $this->Auth_model->checkAccount($email, $password);
        if($check->num_rows() > 0) {
            $row    = $check->result();
            $levelNama = ['', 'foundation', 'ece', 'mi', 'mts', 'ma'];
            $levelWelcome = ['', 'Yayasan', 'Pendidikan Anak Usia Dini' ,'Madrasah Ibtidaiyah', 'Madrasah Tsanawiyah', 'Madrasah Aliyah'];
            $this->session->set_userdata([
              'auth_login' => TRUE, 
              'id' => $row[0]->id, 
              'username' => $row[0]->username,
              'level' => $row[0]->level,
              'levelNama' => $levelNama[$row[0]->level],
              'levelWelcome' => $levelWelcome[$row[0]->level],
            ]);
            redirect('admin/dashboard');
        }else {
            $this->session->set_flashdata(['flash_message' => TRUE, 'message' => 'Email atau password tidak valid']);
            redirect('admin/Auth');
        }
    }

    public function logout() {
        session_destroy();
        redirect('admin/dashboard');
    }
}