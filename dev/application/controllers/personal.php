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

		$this->load->view('header', $data);
		$this->load->view('personal/irs_help', $data);
		$this->load->view('footer');		
	}
}