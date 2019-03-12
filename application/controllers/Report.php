<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout = 'backoffice/report/';
		$this->load->model('report_model');
		$this->load->model('crud_model');
		$userID = $this->session->userdata('user_id');

		if (!empty($userID)) {
			$this->data['dataLogin']   = $this->session->userdata('user_id');
			$this->data['sessiondata'] = $this->session->userdata();
		} else {
			redirect('index.php/welcome/#login', 'refresh');
		}
	}

	public function health()
	{
		$this->data['paper'] = $this->report_model->getpaperAll(1);
		// $this->data['']
		$this->app->render('Report Data Journal', $this->layout.'/index', $this->data, true);
	}

	public function life()
	{
		$this->data['paper'] = $this->report_model->getpaperAll(2);
		// $this->data['']
		$this->app->render('Report Data Journal', $this->layout.'/index', $this->data, true);
	}

	public function physical()
	{
		$this->data['paper'] = $this->report_model->getpaperAll(3);
		// $this->data['']
		$this->app->render('Report Data Journal', $this->layout.'/index', $this->data, true);
	}

	public function csit()
	{
		$this->data['paper'] = $this->report_model->getpaperAll(4);
		// $this->data['']
		$this->app->render('Report Data Journal', $this->layout.'/index', $this->data, true);
	}

	public function match()
	{
		$this->data['paper'] = $this->report_model->getpaperAll(5);
		// $this->data['']
		$this->app->render('Report Data Journal', $this->layout.'/index', $this->data, true);
	}

	public function downloadPaper($id='',$group='')
	{

		if(is_numeric($id)){
			echo "1";
			$file = $this->report_model->getRegis($id);
			if(!empty($file)){
				$Fdata = file_get_contents(base_url('assets/files_template/'.$file[0]->regis_file));
				$Fname = $file[0]->regis_projectnameThai.$file[0]->regis_file;

				force_download($Fname,$Fdata);
			}
		}else{
			echo $id;
			echo $group;
			// redirect('index.php','refresh');
		}
	}
}

/* End of file Report.php */
/* Location: ./application/controllers/Report.php */