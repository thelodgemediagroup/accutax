<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Business extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('business/business');
		$this->load->view('footer');
	}

	public function bookkeeping()
	{
		$this->load->view('header');
		$this->load->view('business/bookkeeping');
		$this->load->view('footer');
	}

	public function payroll()
	{
		$this->load->view('header');
		$this->load->view('business/payroll');
		$this->load->view('footer');		
	}

	public function income_tax_returns()
	{
		$this->load->view('header');
		$this->load->view('business/income_tax_returns');
		$this->load->view('footer');		
	}

	public function quickbooks()
	{
		$this->load->view('header');
		$this->load->view('business/quickbooks');
		$this->load->view('footer');		
	}

	public function irs_help()
	{
		$this->load->view('header');
		$this->load->view('business/irs_help');
		$this->load->view('footer');		
	}
}