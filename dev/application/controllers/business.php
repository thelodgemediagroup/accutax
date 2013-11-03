<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Business extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('business/business');
		$this->load->view('footer');
	}
}