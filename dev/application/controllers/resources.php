<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Resources extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('resources/resources');
		$this->load->view('footer');		
	}
}