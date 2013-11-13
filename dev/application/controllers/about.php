<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class About extends CI_Controller {

	public function index()
	{
		$data['page_desc'] = 'Accutax is a family owned and operated business that has provided quality-oriented financial services in the Utica, MI area for over 40 years.';
		$data['title'] = 'About | Accutax';
		$this->load->view('header', $data);
		$this->load->view('about/about');
		$this->load->view('footer');
	}
}