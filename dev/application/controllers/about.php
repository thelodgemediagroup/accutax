<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class About extends CI_Controller {

	public function index()
	{
		$data['title'] = 'About | Accutax';
		$this->load->view('header', $data);
		$this->load->view('about/about');
		$this->load->view('footer');
	}
}