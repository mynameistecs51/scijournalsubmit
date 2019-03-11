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


}
