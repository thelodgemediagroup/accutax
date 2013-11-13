<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Accutax';
		$data['page_desc'] = "Accutax provides thorough accounting and tax services for the Utica, MI and Metro Detrot areas.";

		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}

}