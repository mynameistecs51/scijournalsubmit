<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout = 'backoffice/template/';
		$this->load->model('datame_model');
		$this->load->model('crud_model');

		$this->data['dataLogin']   = $this->session->userdata('user_id');
		$this->data['sessiondata'] = $this->session->userdata();

	}

	public function index()
	{
		$this->app->render('Download Template', $this->layout.'index', $this->data, true);
	}

	public function downloadTemplate($file)
	{
		switch ($file) {
			case 'paper':
			$Fdata = file_get_contents(base_url('assets/files_template/template_paper.doc'));
			$Fname = str_replace(" ", "_", "Template_paper_2019.doc");
			force_download($Fname,$Fdata);
			break;
			case 'engpaper':
			$Fdata = file_get_contents(base_url('assets/files_template/template_engpaper.doc'));
			$Fname = str_replace(" ", "_", "Template_eng_paper_2019.doc");
			force_download($Fname,$Fdata);
			break;
			case 'engpaperpdf':
			$Fdata = file_get_contents(base_url('assets/files_template/template_engpaper.pdf'));
			$Fname = str_replace(" ", "_", "Template_eng_paperpdf_2019.pdf");
			force_download($Fname,$Fdata);
			break;

			default:
			$Fdata = file_get_contents(base_url('assets/files_template/template_poster.pptx'));
			$Fname = str_replace(" ", "_", "Template_poster_2019.pptx");
			force_download($Fname,$Fdata);
			break;
		}

	}

}

/* End of file Template.php */
/* Location: ./application/controllers/Template.php */