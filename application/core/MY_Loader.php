<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class MY_Loader extends CI_Loader
{

	function __construct()
	{
		parent::__construct();
	}

	function get_view($view = '', $data=array(), $layout = 'header')
	{
		$data['page_view'] = $view;
		$data['page_keywords'] = isset($data['page_keywords']) ? $data['page_keywords'] : '';
		$data['page_description'] = isset($data['page_description']) ? $data['page_description'] : '';

		$this->view('elements/' . $layout, $data);

	}

}
