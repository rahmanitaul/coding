<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coding extends CI_Controller
{	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Coding_model');
		
	}

	public function index(){

		$data['title'] = 'Coding Test';


		$data['carousel'] = $this->db->get('carousel')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('main/index', $data);
		$this->load->view('templates/footer');
	}

	public function repeat(){


	}
}