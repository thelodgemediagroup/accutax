<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Contact | Accutax';

		$this->load->view('header', $data);
		$this->load->view('contact/contact');
		$this->load->view('footer');
	}
}