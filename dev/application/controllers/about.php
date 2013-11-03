<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class About extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('about/about');
		$this->load->view('footer');
	}
}