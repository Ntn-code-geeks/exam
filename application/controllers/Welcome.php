<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	public function index()
	{
		$sess=$this->session->userdata();
		if( (!empty($sess['user_id'])) && (!empty($sess['username'])) ){
			redirect('welcome/dashboard');
		}else{
			$this->load->get_view('main');
		}
	}

	public function login(){
		$data=$this->input->post();
		$msg=$this->User->loggIn($data);
		echo $msg;
	}

	public function register(){
		$data=$this->input->post();
		$msg=$this->User->create_user($data);
		echo $msg;
	}

	public function dashboard(){
		$sess=$this->session->userdata();
		if( (!empty($sess['user_id'])) && (!empty($sess['username'])) ){
			$this->load->get_view('dashboard');
		}else{
			$this->load->get_view('main');
		}
	}

	public function logout(){
		session_destroy();
		redirect(base_url());
	}



}
