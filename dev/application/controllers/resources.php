<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Resources extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Resources | Accutax';
		$data['page_desc'] = 'Accutax income tax and employee resources.';

		$this->load->view('header', $data);
		$this->load->view('resources/resources');
		$this->load->view('footer');		
	}
}