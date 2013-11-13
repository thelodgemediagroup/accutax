<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Contact | Accutax';
		$data['page_desc'] = "Contact Accutax by phone at (586) 580-3040, email us at janis@eaccutax.com, or see us in person at our Utica, MI location.";

		$this->load->view('header', $data);
		$this->load->view('contact/contact');
		$this->load->view('footer');
	}
}