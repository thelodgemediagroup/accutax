<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Personal extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('personal/personal');
		$this->load->view('footer');
	}

	public function income_tax_returns()
	{
		$this->load->view('header');
		$this->load->view('personal/income_tax_returns');
		$this->load->view('footer');		
	}

	public function quickbooks()
	{
		$this->load->view('header');
		$this->load->view('personal/quickbooks');
		$this->load->view('footer');		
	}

	public function irs_help()
	{
		$this->load->view('header');
		$this->load->view('personal/irs_help');
		$this->load->view('footer');		
	}
}