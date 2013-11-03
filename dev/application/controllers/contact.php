<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('contact/contact');
		$this->load->view('footer');
	}
}