<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

}