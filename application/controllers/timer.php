<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Exam','exam');
	}

	public function index(){
		$sess=$this->session->userdata();
		if( (!empty($sess['user_id'])) && (!empty($sess['username'])) ){
			//$data['action']='timer/formdata';
			$this->load->get_view('portal');
		}else{
			redirect('welcome/index');
		}

	}

	public function formdata(){
		$data=$this->input->post();
		$msg=$this->exam->storeRec($data);
		echo $msg;
	}




}
