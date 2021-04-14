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
		$data['products'] = $this->db->get('products')->result_array();
		$data['newcarousel'] = $this->db->get('carousel_2')->result_array();
		$data['services'] = $this->db->get('services')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('main/index', $data);
		$this->load->view('templates/footer');
	}

}

