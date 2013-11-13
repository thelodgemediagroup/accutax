<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Business extends CI_Controller {

	private $sidebar_data = array(
			'Accounting' => 'business/accounting',
			'Payroll' => 'business/payroll',
			'Income Tax Returns' => 'business/income_tax_returns',
			'QuickBooks' => 'business/quickbooks',
			'IRS Help' => 'business/irs_help'
		);
	
	private $sidebar_title = 'Business';

	public function index()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = '';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);
		$data['title'] = 'Business | Accutax';

		$this->load->view('header', $data);		
		$this->load->view('business/business', $data);
		$this->load->view('footer');
	}

	public function accounting()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'Accounting';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);
		$data['title'] = 'Accounting | Accutax';

		$this->load->view('header', $data);
		$this->load->view('business/accounting', $data);
		$this->load->view('footer');
	}

	public function payroll()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'Payroll';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);
		$data['title'] = 'Payroll | Accutax';

		$this->load->view('header', $data);
		$this->load->view('business/payroll', $data);
		$this->load->view('footer');		
	}

	public function income_tax_returns()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'Income Tax Returns';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);		
		$data['title'] = 'Income Tax Returns | Accutax';

		$this->load->view('header', $data);
		$this->load->view('business/income_tax_returns', $data);
		$this->load->view('footer');		
	}

	public function quickbooks()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'QuickBooks';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);
		$data['title'] = 'QuickBooks | Accutax';

		$this->load->view('header', $data);
		$this->load->view('business/quickbooks', $data);
		$this->load->view('footer');		
	}

	public function irs_help()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'IRS Help';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);
		$data['title'] = 'IRS Help | Accutax';

		$this->load->view('header', $data);
		$this->load->view('business/irs_help', $data);
		$this->load->view('footer');		
	}
}