<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Personal extends CI_Controller {
	
	private $sidebar_data = array(
			'Income Tax Returns' => 'personal/income_tax_returns',
			'Quickbooks' => 'personal/quickbooks',
			'IRS Help' => 'personal/irs_help'
		);

	private $sidebar_title = 'Personal';

	public function index()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = '';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);		

		$this->load->view('header');
		$this->load->view('personal/personal', $data);
		$this->load->view('footer');
	}

	public function income_tax_returns()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'Income Tax Returns';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);		

		$this->load->view('header');
		$this->load->view('personal/income_tax_returns', $data);
		$this->load->view('footer');		
	}

	public function quickbooks()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'Quickbooks';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);		

		$this->load->view('header');
		$this->load->view('personal/quickbooks', $data);
		$this->load->view('footer');		
	}

	public function irs_help()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'IRS Help';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);		

		$this->load->view('header');
		$this->load->view('personal/irs_help', $data);
		$this->load->view('footer');		
	}
}