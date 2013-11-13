<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Personal extends CI_Controller {
	
	private $sidebar_data = array(
			'Income Tax Returns' => 'personal/income_tax_returns',
			'QuickBooks' => 'personal/quickbooks',
			'IRS Help' => 'personal/irs_help'
		);

	private $sidebar_title = 'Personal';

	public function index()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = '';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);		
		$data['title'] = 'Personal | Accutax';
		$data['page_desc'] = 'Accutax can help you earn more money on your personal income tax returns.';

		$this->load->view('header', $data);
		$this->load->view('personal/personal', $data);
		$this->load->view('footer');
	}

	public function income_tax_returns()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'Income Tax Returns';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);		
		$data['title'] = 'Income Tax Returns | Accutax';
		$data['page_desc'] = 'Accutax can help you earn more money on your personal income tax returns.';

		$this->load->view('header', $data);
		$this->load->view('personal/income_tax_returns', $data);
		$this->load->view('footer');		
	}

	public function quickbooks()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'QuickBooks';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);		
		$data['title'] = 'QuickBooks | Accutax';
		$data['page_desc'] = 'Learn to manage your finances like a pro with QuickBooks help from Accutax.';

		$this->load->view('header', $data);
		$this->load->view('personal/quickbooks', $data);
		$this->load->view('footer');		
	}

	public function irs_help()
	{
		$sidebar['titles'] = $this->sidebar_data;
		$sidebar['sidebar_title'] = $this->sidebar_title;
		$sidebar['selected'] = 'IRS Help';
		$data['sidebar'] = $this->load->view('sidebar', $sidebar, TRUE);		
		$data['title'] = 'IRS Help | Accutax';
		$data['page_desc'] = 'We\'re certified Enrolled Agents. We can represent you before the Internal Revenue Service.';

		$this->load->view('header', $data);
		$this->load->view('personal/irs_help', $data);
		$this->load->view('footer');		
	}
}