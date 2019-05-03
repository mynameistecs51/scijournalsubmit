<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout = 'frontoffice/';
		$userID = $this->session->userdata('user_id');
		if (!empty($userID)) {
			$this->data['dataLogin'] = $this->session->userdata('user_id');
			$this->data['sessiondata'] = $this->session->userdata();
		}
	}

	public function index()
	{
		$this->data['data'] = null;
		$this->app->render('Science Journal UDRU '.CI_VERSION, $this->layout.'index', $this->data, null);
	}

	public function notifylist()
	{
		$this->data['data'] = null;
		$this->app->render('Science Journal UDRU ', $this->layout.'welcome/notifylife', $this->data, null);
	}

	public function pageSchedule()
	{
		$this->load->view('public/frontoffice/welcome/scheduls');
	}

	public function pageTemplate()
	{
		$this->load->view('public/frontoffice/welcome/template');
	}

	public function fee()
	{
		$this->load->view('public/frontoffice/welcome/fee');
	}

	public function readfile()
	{
		$this->load->helper('file');
		// $data = file_get_contents(base_url().'files_upload/file_document/'.$file_name);
		$path = base_url('assets/file_speaker/speaker.pdf');

		echo  $path = fopen($path,'r');
		var_dump($path);
	}

}
