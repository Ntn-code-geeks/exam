<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
//		$this->load->model('Exam');
	}

	public function index(){
		$data['action']='timer/formdata';
		$this->load->get_view('portal',$data);
	}

	public function formdata(){
		$data=$this->input->post();
		pr($data);
	}




}
